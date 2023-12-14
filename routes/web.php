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

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'FrontendController@home'
]);

Route::get('/about-us', [
    'as' => 'company_path',
    'uses' => 'FrontendController@company'
]);

Route::get('/team-page', [
    'as' => 'team_path',
    'uses' => 'FrontendController@team'
]);

//get related projects to a type
Route::post('/get-related-projects-from-type-id', [
    'as' => 'get_related_projects_path',
    'uses' => 'FrontendController@getRelatedProjects'
]);

Route::get('/services', [
    'as' => 'services_path',
    'uses' => 'FrontendController@services'
]);

Route::get('/projects', [
    'as' => 'projects_path',
    'uses' => 'FrontendController@projects'
]);

Route::get('/project-details-{project_id}', [
    'as' => 'project_details_path',
    'uses' => 'FrontendController@projectDetails'
]);

Route::get('/news', [
    'as' => 'news_path',
    'uses' => 'FrontendController@news'
]);

Route::get('/partners', [
    'as' => 'partners_path',
    'uses' => 'FrontendController@partners'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'FrontendController@contact'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'FrontendController@getContactForm'
]);

Route::get('/careers', [
    'as' => 'careers_path',
    'uses' => 'FrontendController@careers'
]);

Route::post('/careers', [
    'as' => 'careers_path',
    'uses' => 'FrontendController@getCareersForm'
]);

Route::get('/search', [
    'as' => 'search_path',
    'uses' => 'FrontendController@search'
]);

Route::post('/search', [
    'as' => 'search_path',
    'uses' => 'FrontendController@getSearchForm'
]);




/*
|--------------------------------------------------------------------------
| BACKEND ROUTES
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// =============== PROJECT MANAGEMENT =======================


//Page for projects management
Route::get('/projects-management', [
    'as' => 'cms_projects',
    'uses' => 'ProjectsController@index'
]);

// add project 
Route::post('/add-project', [
    'as' => 'add_project_path',
    'uses' => 'ProjectsController@add'
]);


//get project data from id
Route::post('/get-project-data-from-id', [
    'as' => 'get_project_data_path',
    'uses' => 'ProjectsController@getProjectDataFromId'
]);


//edit project
Route::post('/projects-management', [
    'as' => 'cms_projects',
    'uses' => 'ProjectsController@update'
]);


//delete project
Route::post('/delete-project', [
    'as' => 'delete_project_path',
    'uses' => 'ProjectsController@delete'
]);


//Route to project gallery management
Route::get('/project-gallery-{project_id}', [
    'as' => 'cms_gallery_path',
    'uses' => 'ProjectsController@showGallery'
]);


//Route to add gallery image
Route::post('/project-gallery', [
    'as' => 'add_image_path',
    'uses' => 'ProjectsController@addImage'
]);


//delete image
Route::post('/delete-image', [
    'as' => 'delete_image_path',
    'uses' => 'ProjectsController@deleteImage'
]);


//Page for News management
Route::get('/news-management', [
    'as' => 'cms_news',
    'uses' => 'ProjectsController@showNews'
]);


// add news 
Route::post('/add-news', [
    'as' => 'cms_add_news_path',
    'uses' => 'ProjectsController@addNews'
]);

//get news data from id
Route::post('/get-news-data-from-id', [
    'as' => 'get_news_data_path',
    'uses' => 'ProjectsController@getNewsDataFromId'
]);

//edit news
Route::post('/edit_news', [
    'as' => 'cms_edit_news_path',
    'uses' => 'ProjectsController@updateNews'
]);


//delete project
Route::post('/delete-news', [
    'as' => 'delete_news_path',
    'uses' => 'ProjectsController@deleteNews'
]);



// =============== Home Page =======================
//Page for Home
Route::get('/cms/home-page', [
    'as' => 'home_page_cms',
    'uses' => 'HomePageController@index'
]);

// update Home
Route::post('/cms/store-home-page', [
    'as' => 'cms_store_home_page',
    'uses' => 'HomePageController@store'
]);

// =============== Sliders Home  =======================
//Page for Sliders Home
Route::get('/cms/sliders', [
    'as' => 'sliders_cms',
    'uses' => 'SliderHomeController@index'
]);

//Page for create Slider Home
Route::get('/cms/create/slider', [
    'as' => 'slider_cms_create',
    'uses' => 'SliderHomeController@create'
]);

//Page for store Sliders Home
Route::post('/cms/store/slider', [
    'as' => 'slider_cms_store',
    'uses' => 'SliderHomeController@store'
]);

//Page for Edit Slider Home
Route::get('/cms/edit/slider/{id}', [
    'as' => 'slider_cms_edit',
    'uses' => 'SliderHomeController@edit'
]);

//Page for Update Sliders Home
Route::post('/cms/update/slider/{id}', [
    'as' => 'slider_cms_update',
    'uses' => 'SliderHomeController@update'
]);

//Page for delete Sliders Home
Route::delete('/cms/delete/slider/{id}', [
    'as' => 'slider_cms_delete',
    'uses' => 'SliderHomeController@delete'
]);


// =============== Clients  =======================
//Page for Clients
Route::get('/cms/clients', [
    'as' => 'clients_cms',
    'uses' => 'ClientController@index'
]);

//Page for create client
Route::get('/cms/create/clients', [
    'as' => 'client_cms_create',
    'uses' => 'ClientController@create'
]);

//Page for store client
Route::post('/cms/store/clients', [
    'as' => 'client_cms_store',
    'uses' => 'ClientController@store'
]);

//Page for Edit client
Route::get('/cms/edit/client/{id}', [
    'as' => 'client_cms_edit',
    'uses' => 'ClientController@edit'
]);

//Page for Update client
Route::post('/cms/update/client/{id}', [
    'as' => 'client_cms_update',
    'uses' => 'ClientController@update'
]);

//Page for delete client
Route::delete('/cms/delete/client/{id}', [
    'as' => 'client_cms_delete',
    'uses' => 'ClientController@delete'
]);

// =============== Company Page =======================
//Page for Company Page
Route::get('/cms/company-page', [
    'as' => 'company_page_cms',
    'uses' => 'CompanyController@index'
]);

// update Company
Route::post('/cms/store-company-page', [
    'as' => 'cms_add_company_page',
    'uses' => 'CompanyController@store'
]);


// =============== Company Section =======================
//Page for Company Section 
Route::get('/cms/company-section', [
    'as' => 'company_section_cms',
    'uses' => 'CompanyController@companySection'
]);

// update Company Section
Route::post('/cms/store-company-section', [
    'as' => 'cms_add_company_section',
    'uses' => 'CompanyController@storeCompanySection'
]);


// =============== Team =======================
//Page for Team 
Route::get('/cms/team', [
    'as' => 'team_cms',
    'uses' => 'TeamController@index'
]);

// update Team
Route::post('/cms/store-team', [
    'as' => 'cms_add_team',
    'uses' => 'TeamController@storeTeam'
]);

// =============== Our Values =======================
//Page for Our Values 
Route::get('/cms/our-values', [
    'as' => 'our_values_cms',
    'uses' => 'OurValueController@index'
]);

// update Our Values
Route::post('/cms/store-our-values', [
    'as' => 'cms_add_our_values',
    'uses' => 'OurValueController@store'
]);

// =============== Service Page =======================
//Page for Service
Route::get('/cms/service-page', [
    'as' => 'service_page_cms',
    'uses' => 'ServicePageController@index'
]);

// update ServicePage
Route::post('/cms/store-service-page', [
    'as' => 'cms_store_service_page',
    'uses' => 'ServicePageController@store'
]);



// =============== Services  =======================
//Page for Services
Route::get('/cms/services', [
    'as' => 'services_cms',
    'uses' => 'ServiceController@index'
]);

//Page for create Service
Route::post('/cms/store/services', [
    'as' => 'service_cms_store',
    'uses' => 'ServiceController@store'
]);













// =============== Partner  =======================
//Page for partner
Route::get('/cms/partner', [
    'as' => 'partner_cms',
    'uses' => 'PartnerController@index'
]);

//Page for store partner
Route::post('/cms/store/partner', [
    'as' => 'partner_cms_store',
    'uses' => 'PartnerController@store'
]);

// =============== Contact  =======================
//Page for contact
Route::get('/cms/contact', [
    'as' => 'contact_cms',
    'uses' => 'ContactController@index'
]);

//Page for store contact
Route::post('/cms/store/contact', [
    'as' => 'contact_cms_store',
    'uses' => 'ContactController@store'
]);

// =============== Career  =======================
//Page for Career
Route::get('/cms/career', [
    'as' => 'careers_cms',
    'uses' => 'CareerController@index'
]);

//Page for store career
Route::post('/cms/store/career', [
    'as' => 'career_cms_store',
    'uses' => 'CareerController@store'
]);


/*******  Seo Pages *********/
Route::get('/cms/seo', 'SeoPageController@index')->name('seoCms');
Route::get('/cms/seo-edit-{id}', 'SeoPageController@edit')->name('seoEdit');
Route::post('/cms/seo-update-{id}', 'SeoPageController@update')->name('seoUpdate');
/*******  Seo Pages Ending */

// =============== Settings  =======================
//Page for Settings
Route::get('/cms/settings', [
    'as' => 'settings_cms',
    'uses' => 'SettingsController@index'
]);

//Page for store settings
Route::post('/cms/create/settings', [
    'as' => 'settings_cms_store',
    'uses' => 'SettingsController@store'
]);
