from django.shortcuts import render,redirect
from .models import loginDetails
from django.contrib.auth.models import User
from django.contrib.auth import authenticate,login
from django.core.mail import send_mail
from project import settings
# Create your views here.

def login(request, *args, **kwargs):
	return render(request, 'login/login.html')


def register(request, *args, **kwargs):
	sess = request.session['allow']
	if sess is not None:
		return render(request, 'login/register.html')
	else:
		redirect('/')
	
def saveDetails(request, *args, **kwargs):
	if request.method == 'POST':
		email = request.POST['email']
		password = request.POST['password']
		rpt_password = request.POST['rpt_password']
		email_confirm = loginDetails.objects.filter(email=email).exists()

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
		else:
			user = loginDetails(email=email, password=password)
			user.save()
			return render(request, 'login/login.html',{"msg1":"Account created successfuly, plese login."})
	
	else:
		return render(request, 'login/register.html')

def allowLogin(request, *args, **kwargs):
	if request.method == 'POST':
		email = request.POST['email']
		password = request.POST['password']

		check_email = loginDetails.objects.filter(email=email).exists()
		user = loginDetails.objects.filter(email=email, password=password).exists()
		authe = authenticate(request, email=email, password=password)

		if email =="":
			return render(request, 'login/login.html',{"msg1":"Fill the Email field"})

		if password =="":
			return render(request, 'login/login.html',{"msg1":"Fill the password field"})

		if check_email == False:
			return render(request, 'login/login.html',{"msg1":"The email does not exist in our database!"})
			
		if user == False:
			return render(request, 'login/login.html',{"msg1":"Incorrect Password!"})

		if user == True:
			request.session['allow'] = email
			return redirect('/')
		else:
			return render(request, 'login/login.html',{"msg1":"Unknown error please login again!"})

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
	return HTTPResponse(msg)