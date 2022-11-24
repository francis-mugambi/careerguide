from django.http import HttpResponse
from django.shortcuts import render,redirect
from .models import studentDetails, course, department, school, studentsAdviceRequest, chat, lecturerDetails
from django.contrib.auth.models import User, auth
from django.contrib.auth.models import UserManager
from django.contrib.auth import authenticate, login
from django.core.mail import send_mail
from project import settings
from django.contrib import messages
# Create your views here.

def login(request, *args, **kwargs):
	return render(request, 'login/login.html')

def lecturer_login(request, *args, **kwargs):
	return render(request, 'login/lecturer_login.html')


def register(request, *args, **kwargs):
	
		return render(request, 'login/register.html')
	
	
def saveDetails(request, *args, **kwargs):
	if request.method == 'POST':
		#username = request.POST['username']
		email = request.POST['email']
		password = request.POST['password']
		rpt_password = request.POST['rpt_password']

		email_confirm = User.objects.filter(username=email).exists()
		#name_confirm = User.objects.filter(username=username).exists()

		if email =="":
			return render(request, 'login/register.html',{"msg":"Fill the Email field"})

		if password =="":
			return render(request, 'login/register.html',{"msg":"Fill the Password field"})

		if rpt_password =="":
			return render(request, 'login/register.html',{"msg":"Fill the Repeat Password field"})

		if rpt_password != password:
			return render(request, 'login/register.html',{"msg":"Repeat Password is not the same as Set password"})

		if email_confirm :
			return render(request, 'login/register.html',{"msg":"A user with that email exists"})

		#if name_confirm :
			#return render(request, 'login/register.html',{"msg":"A user with that username exists"})

		else:
			user =User.objects.create_user(username=email, password=password)
			user.save()
			student_details = studentDetails(name="Name not updated", 
			email=email, phone="Phone not updated", bio="Bio not updated", county="County not updated")
			student_details.save()
			return render(request, 'login/login.html',{"msg1":"Account created successfuly, plese login."})
	
	else:
		return render(request, 'login/register.html')

def allowLogin(request, *args, **kwargs):
	if request.method == 'POST':
		email = request.POST['email']
		password = request.POST['password']

		check_email = User.objects.filter(username=email).exists()
		user = authenticate(request, username=email, password=password)
		check_admin = User.objects.filter(username=email,is_staff=True).exists()

		if email =="":
			return render(request, 'login/login.html',{"msg1":"Fill the Email field"})

		if password =="":
			return render(request, 'login/login.html',{"msg1":"Fill the password field"})

		if check_email == False:
			return render(request, 'login/login.html',{"msg1":"The email does not exist in our database!"})

		if check_admin == True:
			return render(request, 'login/lecturer_login.html',{"msg1":"Please use this Portal to login!"})
		
		if user is not None:
			login(request, user)
			request.session['semail'] = email  
			return redirect('/student_dashboard/')

		else:
			return render(request, 'login/login.html',{"msg1":"Incorrect Password!"})	
		
	if request.method == 'GET':
		email = request.GET['email']
		password = request.GET['password']

		check_email = User.objects.filter(username=email).exists()
		check_admin = User.objects.filter(username=email,is_staff=False).exists()
		user = authenticate(request, username=email, password=password)

		if email =="":
			return render(request, 'login/lecturer_login.html',{"msg1":"Fill the Email field"})

		if password =="":
			return render(request, 'login/lecturer_login.html',{"msg1":"Fill the password field"})

		if check_email == False:
			return render(request, 'login/lecturer_login.html',{"msg1":"The email does not exist in our database!"})
		
		if check_admin == True:
			return render(request, 'login/login.html',{"msg1":"You are not allowed to use the admin Portal!"})
		
		if user is not None:
			login(request, user)
			request.session['semail'] = email  
			return redirect('/lecturer_dashboard/')

		else:
			return render(request, 'login/login.html',{"msg1":"Incorrect Password!"})		
		
	else:
		return render(request, 'login/login.html',{"msg1":"Unknown error occurred!"})

def email(request):
	subject = "greetings"
	msg = "congulatulations"
	to = "francismugambi97@gmail.com"
	res = send_mail(subject, msg, settings.EMAIL_HOST_USER, [to])
	if(res==1):
		msg = 'mail sent'
	else:
		msg = "mail was not sent"
	return HttpResponse(msg)

def student_dashboard(request, *args, **kwargs):
	email = request.session['semail']
	student = studentDetails.objects.get(email=email)
	courses = course.objects.count()
	facaulties = school.objects.count()
	departmets = department.objects.count()	
	booking = studentsAdviceRequest.objects.filter(email=email)
	context = {
				'courses':courses,
				'departments':departmets,	
				'facaulties':facaulties,
				'studentDetails':student,
				'bookings':booking			
			}
	return render(request, 'login/student_dashboard.html', context)

def student_profile(request, *args, **kwargs):
	email = request.session['semail']
	student = studentDetails.objects.get(email=email)
	context = {
		'studentDetails':student
	}
	return render(request, 'login/student_profile.html', context)

def student_request(request, *args, **kwargs):	
	email = request.session['semail']
	student = studentDetails.objects.get(email=email)
	courses = course.objects.all()
	context = {
				'courses':courses,	
				'studentDetails':student			
			}
	return render(request, 'login/student_request.html', context)

def student_guide(request, *args, **kwargs):
	email = request.session['semail']
	student = studentDetails.objects.get(email=email)
	message = chat.objects.filter(sentTo=email)
	context = {				
				'studentDetails':student,
				'messages':message		
			}
	return render(request, 'login/student_guide.html', context)

def update_student_details(request):
	if request.method == 'POST':
		check = studentDetails(email=request.session['semail']).DoesNotExist()
		if check == True:
			return redirect("/student_profile/")
		name = request.POST['name']
		email = request.POST['email']
		phone = request.POST['phone']
		bio = request.POST['bio']
		county = request.POST['county']
		entry = studentDetails.objects.get(email=request.session['semail'])
		entry.name = name
		entry.email =email
		entry.phone = phone
		entry.bio = bio
		entry.county = county
		entry.save()
		
		return redirect("/student_profile/")

	else:
		return redirect("/")


def lecturer_dashboard(request, *args, **kwargs):
	user = request.session['semail']
	dep = lecturerDetails.objects.get(email=user)
	
	message = chat.objects.filter(sentFrom=user)
	courses = course.objects.filter(department=dep.department).count()
	registered = studentDetails.objects.all().count()
	messageNo = chat.objects.filter(sentTo=user).count()	
	requests = studentsAdviceRequest.objects.filter(department__department=dep.department).count()
	context = {
				'messages':message,
				'messageNo':messageNo,
				'requests':requests,
				'registered':registered,
				'courses':courses
			}
	return render(request, 'login/lecturer_dashboard.html', context)

def lecturer_students(request, *args, **kwargs):
	user = request.session['semail']
	student = studentDetails.objects.all()
	dep = lecturerDetails.objects.get(email=user)
	courses = studentsAdviceRequest.objects.filter(department__department=dep.department)	
	context = {				
				'students':student,
				'courses':courses,			
			}
	return render(request, 'login/lecturer_students.html', context)

def lecturer_guides(request, *args, **kwargs):
	user = request.session['semail']
	
	context = {
				'user':user,					
			}
	return render(request, 'login/lecturer_guides.html', context)

def lecturer_getsfeedback(request, *args, **kwargs):
	user = request.session['semail']
	message = chat.objects.filter(sentTo=user)
	context = {
				'messages':message,
			}
	return render(request, 'login/lecturer_getsfeedback.html', context)


def saveCourseAdviceRequest(request):
	if request.method == 'POST':
		email = request.session['semail']
		courseName = request.POST['courseName']
		department1 = request.POST['department']
		#check = studentsAdviceRequest(course=courseName, department=department, email=email).DoesNotExist()
		check2 = studentsAdviceRequest.objects.filter(course=courseName, email=email).exists()
		if check2 == False:			
			pop = department.objects.get(department=department1)
			studentsAdviceRequest.objects.create(course=courseName, department=pop, email=email)		
			
			messages.info(request, "You have requested successfully")	
			return redirect("/student_request/")
			
		else:
			messages.info(request, "You had aready booked for the course!")
			return redirect("/student_request/")

def save_chat(request):
	if request.method == 'POST':
		email = request.session['semail']
		sentFrom = request.POST['sent_from']
		sentTo = request.POST['send_to']
		message = request.POST['message']
		
		check = chat.objects.filter(sentFrom=sentFrom, sentTo=sentTo, message=message).exists()
		check2 = studentDetails.objects.filter(email=sentTo).exists()
		if check2 == False:
			messages.info(request, "The message cannot be sent!, The email is not in our database")	
			return redirect("/lecturer_guides/")
		if check == False:
			saveChat = chat(sentFrom=sentFrom, sentTo=sentTo, message=message)		
			saveChat.save()	
			messages.info(request, "Message sent successfully")	
			return redirect("/lecturer_guides/")
			
		else:
			messages.info(request, "The Message is aready saved in our database!")
			return redirect("/lecturer_guides/")

	if request.method == 'GET':
		email = request.session['semail']
		sentFrom = request.GET['sent_from']
		sentTo = request.GET['send_to']
		message = request.GET['message']
		
		check = chat.objects.filter(sentFrom=sentFrom, sentTo=sentTo, message=message).exists()
		check2 = lecturerDetails.objects.filter(email=sentTo).exists()
		if check2 == False:
			messages.info(request, "The message cannot be sent!, The email is not in our database")	
			return redirect("/student-reply/")
		if check == False:
			saveChat = chat(sentFrom=sentFrom, sentTo=sentTo, message=message)		
			saveChat.save()	
			messages.info(request, "Message sent successfully")	
			return redirect("/student-reply/")
			
		else:
			messages.info(request, "The Message is aready saved in our database!")
			return redirect("/student-reply/")

def student_reply(request, *args, **kwargs):
	user = request.session['semail']
	student = studentDetails.objects.get(email=user)
	context = {
				'user':user,
				'studentDetails':student,					
			}
	return render(request, 'login/student_reply.html', context)