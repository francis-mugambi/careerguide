from django.db import models
from django.db.models.fields import CharField, EmailField
# Create your models here.

class loginDetails(models.Model):
	email = models.EmailField(max_length=100);
	password = models.CharField(max_length=50);