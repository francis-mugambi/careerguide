
from django.contrib import admin
from django.urls import path
from . import views


urlpatterns = [
    path('', views.home),
    path('careerguide/', views.careerguide),
    path('Approved_programmes/', views.approved),
    path('Degree_courses/', views.degree),
    path('Diploma_courses/', views.diploma),
    path('Certificate_courses/', views.certificate),
    path('Contact/', views.Contact),
    
    
]