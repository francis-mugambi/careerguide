from django.contrib import admin
from django.urls import path
from . import views


urlpatterns = [
    path('login/', views.login),   
    path('register/', views.register),
    path('saveDetails/', views.saveDetails),
    path('allowLogin/', views.allowLogin),
    path('email/', views.email),
    
]