from django.db import models
from django.db.models.fields import CharField, EmailField
from django.contrib.auth.models import User, auth
# Create your models here.

class studentDetails(models.Model):
	name = models.CharField(max_length=70);
	email = models.EmailField(max_length=70);
	phone = models.CharField(max_length=20);
	bio = models.TextField(max_length=500);
	county = models.CharField(max_length=50);
	def __str__(self):
         return self.name


class school(models.Model):
	school = models.CharField(max_length=450)
	def __str__(self):
         return self.school

class department(models.Model):
	department = models.CharField(max_length=350)
	school = models.ForeignKey(school, on_delete=models.SET_NULL, null=True)
	def __str__(self):
         return self.department

class course(models.Model):
	course = models.CharField(max_length=350);
	department = models.ForeignKey(department, on_delete=models.CASCADE)
	def __str__(self):
         return self.course
	
class studentsAdviceRequest(models.Model):
	email = models.EmailField(max_length=100)
	course = models.CharField(max_length=350)
	department = models.ForeignKey(department, on_delete=models.CASCADE, max_length=350)
	def __str__(self):
         return self.course

class chat(models.Model):
	sentFrom = models.EmailField(max_length=150);
	sentTo = models.EmailField(max_length=150);
	message = models.CharField(max_length=750);
	def __str__(self):
         return self.sentFrom

class lecturerDetails(models.Model):
	name = models.CharField(max_length=70);
	email = models.EmailField(max_length=70);
	phone = models.CharField(max_length=20);
	department = models.ForeignKey(department, on_delete=models.SET_NULL, null=True)
	def __str__(self):
         return self.name
