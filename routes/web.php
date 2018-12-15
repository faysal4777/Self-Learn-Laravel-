<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('home.index');
Route::get('/{id}/courses','HomeController@course')->name('home.courses');
Route::get('/searchCourse/{id}','HomeController@searchCourse')->name('home.searchCourse');
Route::post('/coursesPost','HomeController@coursePost')->name('home.coursePost');

Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');

Route::get('/register','RegistrationController@index')->name('register.index');
Route::post('/register','RegistrationController@verify')->name('register.verify');

Route::get('/logout','logoutController@index')->name('logout.index');


Route::get('/admin/deleteCourses','AdminController@deleteCourses')->name('admin.deleteCourses');
Route::get('/admin/profile','AdminController@profile')->name('admin.profile');
Route::get('/admin/showCourses','AdminController@showCourses')->name('admin.showCourses');
Route::get('/admin/showInstructors','AdminController@showInstructors')->name('admin.showInstructors');
Route::get('/admin/showStudents','AdminController@showStudents')->name('admin.showStudents');
Route::resource('/admin','AdminController');




Route::get('/student/course','StudentController@allCourse')->name('student.course');
Route::get('/student/popular','StudentController@popular')->name('student.popular');
Route::get('/student/searchCourse/{id}','StudentController@searchCourse')->name('student.searchCourse');
Route::get('/student/{id}/showCourse','StudentController@showCourse')->name('student.showCourse');
Route::post('/student/showCoursePost','StudentController@showCoursePost')->name('student.showCoursePost');
Route::get('/student/myCourse','StudentController@myCourse')->name('student.myCourse');
Route::get('/student/chapter/{id}/{id2?}','StudentController@chapter')->name('student.chapter');
Route::get('/student/{id}/enroll','StudentController@enroll')->name('student.enroll');
Route::get('/student/{id}/quiz','StudentController@quiz')->name('student.quiz');
Route::get('/student/quizResult/{id}','StudentController@storeResult')->name('student.storeResult');
Route::get('/student/share/{id}','StudentController@share')->name('student.share');
Route::get('/student/profile','StudentController@profile')->name('student.profile');
Route::post('/student/editInfo','StudentController@editInfo')->name('student.editInfo');
Route::post('/student/editPass','StudentController@editPass')->name('student.editPass');
Route::resource('/student','StudentController');



Route::get('/instructor/profile','InstructorController@profile')->name('instructor.profile');
Route::post('/instructor/editInfo','InstructorController@editInfo')->name('instructor.editInfo');
Route::post('/instructor/editPass','InstructorController@editPass')->name('instructor.editPass');
Route::get('/instructor/myCourses','InstructorController@myCourses')->name('instructor.myCourses');
Route::get('/instructor/{id}/seeCourse','InstructorController@seeCourse')->name('instructor.seeCourse');
Route::get('/instructor/chapter/{id}/{id2?}','InstructorController@chapter')->name('instructor.chapter');
Route::get('/instructor/{id}/quiz','InstructorController@quiz')->name('instructor.quiz');
Route::post('/instructor/addCourse','InstructorController@addCourse')->name('instructor.addCourse');
Route::get('/instructor/{id}/editCourse','InstructorController@editCourse')->name('instructor.editCourse');
Route::post('/instructor/editCourseInfo','InstructorController@editCourseInfo')->name('instructor.editCourseInfo');
Route::post('/instructor/editChapter','InstructorController@editChapter')->name('instructor.editChapter');
Route::post('/instructor/addChapterEdit','InstructorController@addChapterEdit')->name('instructor.addChapterEdit');
Route::get('/instructor/{id}/deleteCourse','InstructorController@deleteCourse')->name('instructor.deleteCourse');
Route::post('/instructor/deleteCoursePost','InstructorController@deleteCoursePost')->name('instructor.deleteCoursePost');
Route::get('/instructor/{id}/addQuiz','InstructorController@addQuiz')->name('instructor.addQuiz');
Route::post('/instructor/addQuizPost','InstructorController@addQuizPost')->name('instructor.addQuizPost');
Route::resource('/instructor','InstructorController');
