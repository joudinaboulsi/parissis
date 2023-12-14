<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Repositories\ProjectsRepository;
use Carbon\Carbon;
use Auth;
use Mail;
use SEO;
use SEOMeta;
use App\SliderHome;
use App\HomePage;
use App\Team;
use App\OurValue;
use App\Contact;
use App\Settings;
use App\Career;
use App\Partner;
use App\ServicePage;
use App\ServiceSection;
use App\Client;
use App\AboutPage;
use App\CompanySection;
use App\SeoPage;

class FrontendController extends Controller
{
    
     /**
     * var ProjectsRepository;
     */
    private $projectsRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProjectsRepository $projectsRepository)
    {
        $this->ProjectsRepository = $projectsRepository;
        app()->singleton('contact', function () {
            return Settings::findOrFail(1);
        });
    }

    public function setSeo($page_data)
    {
        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
        SEO::opengraph()->setUrl('http://parissis.com');
        SEO::setCanonical('https://parissis.com');
        SEO::opengraph()->addProperty('type', 'articles');
        if ($page_data->og_image != NULL) {
            SEO::addImages(asset('seo/' . $page_data->og_image));
        }
    }

    //home page
    public function home()
    {    
        // SEO::setTitle('Parissis | Steel Construction in Lebanon | Steel Construction Companies in Lebanon, Steel Companies in Lebanon, Steel in Lebanon Skylights, Bridges, Pergolas, Composite Structures, Tensile Membranes, Steel in Lebanon, Stainless Steel in Lebanon');
        // SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');


        $page_data = SeoPage::findOrFail(1);
        $this->setSeo($page_data);
        $getProjectList = $this->ProjectsRepository->showTop();
        $newsList = $this->ProjectsRepository->showNews();   
        $sliders = SliderHome::all();
        $clients = Client::all();
        $home_page= HomePage::where('id',1)->get();
        

        return view('home', array('page_data' => $page_data,'getProjectList' => $getProjectList, 'newsList' => $newsList,'sliders'=>$sliders,'home_page'=>$home_page,'clients' =>$clients));
    }

    //company page
    public function company()
    {      
        // SEO::setTitle('Parissis | About Us | Steel Construction in Lebanon | Steel Construction Companies in Lebanon, Steel Companies in Lebanon, Skylights, Bridges, Pergolas, Composite Structures, Tensile Membranes, Steel in Lebanon, Stainless Steel in Lebanon');
        // SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');


        $page_data = SeoPage::findOrFail(2);
        $this->setSeo($page_data);
        $company= AboutPage::where('id',1)->get();
        $section= CompanySection::where('id',1)->get();

        return view('company',array('page_data' => $page_data,'company'=>$company,'section'=>$section));
    }

    //team page
    public function team()
    {      
        // SEO::setTitle('Parissis | Team | Steel Company in Lebanon | Steel Construction Companies in Lebanon, Steel Companies in Lebanon, Team of Highly qualified Engineers and Designers | Steel Construction in Lebanon, Skylights, Bridges, Pergolas, Composite Structures, Tensile Membranes, Steel in Lebanon, Stainless Steel in Lebanon');
        // SEO::setDescription('Parissis');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');

        $page_data = SeoPage::findOrFail(3);
        $this->setSeo($page_data);
        $team_page= Team::where('id',1)->get();
        $our_value= OurValue::where('id',1)->get();
        return view('team',array('page_data' => $page_data,'team_page' => $team_page,'our_value' => $our_value ));
    }


    // get related projects to a type
   public function getRelatedProjects(Request $request)
    {   
        $data = $this->ProjectsRepository->getRelatedProjects($request->input('id'));
        // return the info to the ajax call
        return response()->json($data);  
    }


    //services page
    public function services()
    {      
        // SEO::setTitle('Parissis | Services | Steel Industry in Lebanon | Bridges, Pergolas, Composite Structures, Tensile Membranes, Glazing, Architecture, Industry Lebanon');
        // SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');


        $page_data = SeoPage::findOrFail(4);
        $this->setSeo($page_data);

        $service_page = ServicePage::where('id',1)->get();
        $services = ServiceSection::where('id',1)->get();

        return view('services',array('page_data' => $page_data,'service_page'=>$service_page,'services'=>$services));
    }

    //projects page
    public function projects()
    {    
        SEO::setTitle('Parissis | Projects | Steel Industry in Lebanon | ABC Ashrafieh, ABC Verdun, ALBA, Saida Stadium, Four Seasons, Intercontinental');
        SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        SEO::opengraph()->setUrl('http://parissis.com');
        SEO::setCanonical('https://parissis.com');
        SEO::opengraph()->addProperty('type', 'articles');

        $getProjectList = $this->ProjectsRepository->show();
        $getTypesList = $this->ProjectsRepository->showTypesList();
        return view('projects', array('getProjectList' => $getProjectList, 'getTypesList' => $getTypesList));
    }

    //project details page
    public function projectDetails($project_id)
    {     
        SEO::setTitle('Parissis | Projects | Steel Industry in Lebanon | Steel Engineering & Contracting Company');
        SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        SEO::opengraph()->setUrl('http://parissis.com');
        SEO::setCanonical('https://parissis.com');
        SEO::opengraph()->addProperty('type', 'articles');

        $getProjectInfo = $this->ProjectsRepository->getProjectDataFromId($project_id);
        $getProjectTypes = $this->ProjectsRepository->getProjectTypesList($project_id);
        $getGallery = $this->ProjectsRepository->showGallery($project_id);
        return view('project-details', array('getProjectInfo' => $getProjectInfo, 'getGallery' => $getGallery, 'getProjectTypes' => $getProjectTypes));
    }

    public function search(Request $request)
    {
        SEO::setTitle('Parissis | News | Steel Engineering & Contracting Company');
        SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        SEO::opengraph()->setUrl('http://parissis.com');
        SEO::setCanonical('https://parissis.com');
        SEO::opengraph()->addProperty('type', 'articles');

        session(['query' => $request->input('query')]);
        $query = $request->input('query');
        $projectsList = $this->ProjectsRepository->getProjectSearch($query);

        return view('search', array('projectsList' => $projectsList, 'query' => $query));
    }

    public function getSearchForm(Request $request)
    {
        SEO::setTitle('Parissis | News | Steel Engineering & Contracting Company');
        SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        SEO::opengraph()->setUrl('http://parissis.com');
        SEO::setCanonical('https://parissis.com');
        SEO::opengraph()->addProperty('type', 'articles');

        $query = $request->input('query');
        $projectsList = $this->ProjectsRepository->getProjectSearch($query);

        return view('search', array('projectsList' => $projectsList, 'query' => $query));
    }

    //news page
    public function news()
    {      
        SEO::setTitle('Parissis | News | Steel Engineering & Contracting Company');
        SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        SEO::opengraph()->setUrl('http://parissis.com');
        SEO::setCanonical('https://parissis.com');
        SEO::opengraph()->addProperty('type', 'articles');

        $newsList = $this->ProjectsRepository->showNews();  
        return view('news', array('newsList' => $newsList));
    }

    //partners page
    public function partners()
    {     
        // SEO::setTitle('Parissis | Partners | Steel Engineering & Contracting Company');
        // SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');

        $page_data = SeoPage::findOrFail(5);
        $this->setSeo($page_data);
        $partner_page= Partner::where('id',1)->get();

        return view('partners',array('page_data' => $page_data,'partner_page'=>$partner_page));
    }

    //contact page
    public function contact()
    {   
        // SEO::setTitle('Parissis | Contact | Steel Engineering & Contracting Company');
        // SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');


        $page_data = SeoPage::findOrFail(6);
        $this->setSeo($page_data);
        $contact = Contact::where('id',1)->get();
        return view('contact',array('contact'=>$contact));
    }
 
    //Get the contact form details and send the mail attached with a Document
    public function getContactForm(Request $request)
    {   
        $name = $request->input('contactform_name');
        $email_client = $request->input('contactform_email');
        $phone_client = $request->input('contactform_phone');
        $subject_client = $request->input('contactform_subject');
        $service_client = $request->input('contactform_service');
        $msg_client = $request->input('contactform_message');
        $document = $request->file('document');

        // if the captcha is checked
        if (! empty($_POST)) 
        {
            Mail::send('emails.contact', array('name' => $name, 'email_client' => $email_client, 'phone_client' => $phone_client, 'subject_client' => $subject_client, 'service_client' => $service_client, 'msg_client' => $msg_client), function($message) use ($email_client, $subject_client, $name, $document)
            {
                $message->from($email_client, $name);
                $message->to('parissis@parissis.com')->subject($subject_client);
                if($document != NULL)
                $message->attach($document->getRealPath(), array('as' => 'attachment.'.$document->getClientOriginalExtension(), 'mime' => $document->getMimeType()));
            });
        }

        return view('contact');
    }

    //careers page
    public function careers()
    {     
        // SEO::setTitle('Parissis | Careers | Steel Engineering & Contracting Company');
        // SEO::setDescription('A Leading Steel Construction Company Based In Lebanon, Working On Both Local And Regional Projects such as Skylights, Bridges, Pergolas, Composite Structures and Tensile Membranes.');
        // SEOMeta::setKeywords('Steel in Lebanon, Steel Industry in Lebanon, Decorative Steel in Lebanon, Steel, Lebanon, Industry, Construction, Fabricator, Design, Architecture, Glazing, Tensile Membranes, Built up section, Skylights, Stainless steel, Decorative Steel, Bridges, Pergolas, Composite Structure');
        // SEO::opengraph()->setUrl('http://parissis.com');
        // SEO::setCanonical('https://parissis.com');
        // SEO::opengraph()->addProperty('type', 'articles');

        $page_data = SeoPage::findOrFail(7);
        $this->setSeo($page_data);
        $careers = Career::where('id',1)->get();

        return view('careers',array('page_data' => $page_data,'careers'=>$careers));
    }

    //Get the careers form details and send the mail attached with a CV
    public function getCareersForm(Request $request)
    {
        $name = $request->input('careerform_name');
        $email = $request->input('careerform_email');
        $phone = $request->input('careerform_phone');
        $files = $request->file('careerform_cv');
        $msg_client = $request->input('careerform_message');

        if (! empty($_POST)) 
        {
            Mail::send('emails.careers', array('name' => $name, 'email' => $email, 'phone' => $phone, 'msg_client' => $msg_client), function($message) use ($email, $name, $files)
            {
                $message->from($email, $name);
                $message->to('parissis@parissis.com')->subject('[Career Request] '. $name .' from Website');
                if($files != NULL)
                $message->attach($files->getRealPath(), array('as' => 'attachment.'.$files->getClientOriginalExtension(), 'mime' => $files->getMimeType()));
            });

            return view('careers');
        }
    }

    
}
