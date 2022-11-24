from django.contrib import admin
from .models import studentDetails, department, course, school, studentsAdviceRequest, chat, lecturerDetails
# Register your models here.
admin.site.register(studentDetails)
admin.site.register(department)
admin.site.register(course)
admin.site.register(school)
admin.site.register(chat)
admin.site.register(studentsAdviceRequest)
admin.site.register(lecturerDetails)