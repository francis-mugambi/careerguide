from django.contrib import admin
from django.urls import path
from . import views


urlpatterns = [
    path('login/', views.login),   
    path('lecturer-login/', views.lecturer_login),
    path('register/', views.register),
    path('saveDetails/', views.saveDetails),
    path('allowLogin/', views.allowLogin),
    path('email/', views.email),
    path('student_dashboard/', views.student_dashboard),
    path('student_profile/', views.student_profile),
    path('student_request/', views.student_request),
    path('student_guide/', views.student_guide),
    path('update_student_details/', views.update_student_details),

    path('lecturer_dashboard/', views.lecturer_dashboard),
    path('lecturer_students/', views.lecturer_students),
    path('lecturer_guides/', views.lecturer_guides),
    path('lecturer_getsfeedback/', views.lecturer_getsfeedback),
    path('saveCourseAdviceRequest/', views.saveCourseAdviceRequest),

    path('save-chat/', views.save_chat),
    path('student-reply/', views.student_reply),
    
]