
from django import forms
from django.contrib.auth.models import User,auth
from django.shortcuts import render,redirect
from .models import contact

# Create your views here.
def home(request, *args, **kwargs):
	return render(request, 'homeapp/index.html')

def approved(request):
	return render(request, 'homeapp/Approved_programmes.php')

def degree(request, *args, **kwargs):	
	return render(request, 'homeapp/Degree_courses.php')

def diploma(request, *args, **kwargs):
	return render(request, 'homeapp/Diploma_courses.php')

def certificate(request, *args, **kwargs):
	return render(request, 'homeapp/Certificate_courses.php')	

def careerguide(request, *args, **kwargs):
	return render(request, 'homeapp/index.php')	

def Contact(request, *args, **kwargs):
	if request.method == 'POST':
		name = request.POST['name']
		email = request.POST['email']
		subject = request.POST['subject']
		message = request.POST['message']

		user = contact(name=name, email=email, subject=subject, message=message)
		user.save();
		return render(request, 'homeapp/index.html', {'msg':'Message sent'})
	

	else:
		return redirect('/')