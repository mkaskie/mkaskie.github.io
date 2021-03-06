<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon-new.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/mjkaskie.css">
  <title>Mitchell Kaskie | Portfolio</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TP5JX4PJF7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TP5JX4PJF7');
  </script>
</head>
<body data-bs-spy="scroll" data-bs-target="#scrollspy-navbar" id="home">
  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" id="scrollspy-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#home">
          <img src="assets/website-logo-blue.png" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#work">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link contact" href="#contact">Contact</a>
            </li>
          </ul>
          <!--<form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid hero">
      <div class="container">
        <div class="row">
          <div class="hero-wrapper">
            <div class="col">
              <h1 class="display-4">mjkaskie.</h1>
              <h2>Digital Marketer, UX/UI Designer and Developer</h2>
              <button type="button" class="btn btn-primary" onclick="document.location='#about'">About</button>
              <button type="button" class="btn btn-outline-primary" onclick="document.location='#contact'">Contact</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="about">
      <div class="row">
        <div class="col-12 col-md-5 d-flex justify-content-center grid-left">
          <div class="wrapper">
            <div class="eyebrow-wrapper">
              <div class="eyebrow-blue-left">
                <h2>About</h2>
              </div>
            </div>
            <ul class="about-list">
              <a href="https://goo.gl/maps/2B8cVoEBeTwZn1Kb8" target="_blank">
                <li class="about-list-item">
                  <div class="about-list-icon p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29.818" height="40" viewBox="0 0 29.818 40">
                      <path id="ic_place_24px" d="M19.909,2C11.666,2,5,8.26,5,16,5,26.5,19.909,42,19.909,42S34.818,26.5,34.818,16C34.818,8.26,28.152,2,19.909,2Zm0,19a5.172,5.172,0,0,1-5.325-5,5.172,5.172,0,0,1,5.325-5,5.172,5.172,0,0,1,5.325,5A5.172,5.172,0,0,1,19.909,21Z" transform="translate(-5 -2)" fill="#4b80c3"/>
                    </svg>              
                  </div>
                  <div class="about-list-name">
                    <span>Dallas, TX</span>
                  </div>
                </li>
              </a>
            </ul>
            <ul class="about-list">
              <li class="about-list-item">
                <div class="about-list-icon p-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="42.105" height="40" viewBox="0 0 42.105 40">
                    <path id="ic_work_24px" d="M39.895,10.421H31.474V6.211A4.2,4.2,0,0,0,27.263,2H18.842a4.2,4.2,0,0,0-4.211,4.211v4.211H6.211a4.178,4.178,0,0,0-4.189,4.211L2,37.789A4.2,4.2,0,0,0,6.211,42H39.895a4.2,4.2,0,0,0,4.211-4.211V14.632A4.2,4.2,0,0,0,39.895,10.421Zm-12.632,0H18.842V6.211h8.421Z" transform="translate(-2 -2)" fill="#4b80c3"/>
                  </svg>              
                </div>
                <div class="about-list-name">
                  <span><a href="https://www.genpact.com/" target="_blank">Genpact</a></span>
                </div>
              </li>
            </ul>
            <ul class="about-list">
              <li class="about-list-item">
                <div class="about-list-icon p-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36.19" height="40" viewBox="0 0 36.19 40">
                    <path id="ic_account_balance_24px" d="M5.81,18.143V31.476h5.714V18.143Zm11.429,0V31.476h5.714V18.143ZM2,41H38.19V35.286H2ZM28.667,18.143V31.476h5.714V18.143ZM20.1,1,2,10.524v3.81H38.19v-3.81Z" transform="translate(-2 -1)" fill="#4b80c3"/>
                  </svg>              
                </div>
                <div class="about-list-name">
                  <span><a href="https://www.uark.edu/" target="_blank">University of Arkansas</a></span>
                </div>
              </li>
            </ul>
            <ul class="about-list">
              <li class="about-list-item">
                <div class="about-list-icon p-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48.889" height="40" viewBox="0 0 48.889 40">
                    <path id="ic_school_24px" d="M9.889,25.622v8.889L25.444,43,41,34.511V25.622L25.444,34.111ZM25.444,3,1,16.333,25.444,29.667l20-10.911V34.111h4.444V16.333Z" transform="translate(-1 -3)" fill="#4b80c3"/>
                  </svg>              
                </div>
                <div class="about-list-name">
                  <span><a href="http://catalog.uark.edu/undergraduatecatalog/collegesandschools/sammwaltoncollegeofbusiness/marketingmktg/" target="blank">Marketing</a></span>
                </div>
              </li>
            </ul>
            <ul class="about-list">
              <li class="about-list-item">
                <div class="about-list-icon p-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="47.059" height="40" viewBox="0 0 47.059 40">
                    <path id="ic_home_24px" d="M20.824,43V28.882h9.412V43H42V24.176h7.059L25.529,3,2,24.176H9.059V43Z" transform="translate(-2 -3)" fill="#4b80c3"/>
                  </svg>              
                </div>
                <div class="about-list-name">
                  <span><a href="https://goo.gl/maps/nQoZeLJ5Fk22xL8H9" target="blank">Prairie Village, KS</a></span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-7 d-flex justify-content-center grid-right">
          <div class="wrapper w-75">
            <div>Howdy! My name is</div>
            <h2>Mitchell Kaskie.</h2>
            <h3>I am a digital marketer, self-taught coder and aspiring UX/UI designer and developer. I currently work as a Web Content Specialist at <a href="https://www.genpact.com/" target="_blank">Genpact</a>.</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid services" id="services">
      <div class="container py-5">
        <div class="row">
          <div class="col text-center pb-4">
            <div class="eyebrow-wrapper">
              <div class="eyebrow-blue-center">
                <h2>Services</h2>
              </div>
            </div>
              <h3>Full stack digital marketing services</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card">
              <h5 class="card-header">Content Creation</h5>
              <div class="card-body">
                <h5 class="card-title">Grab your users attention with compelling content</h5>
                <p class="card-text">From writing landing page copy and blogs to creating digital ads and graphics, I can make content both relevant and informative to your prospects and convert them to customers</p>
                <!--<a href="#" class="btn btn-primary">Learn More</a>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card">
              <h5 class="card-header">Website Management</h5>
              <div class="card-body">
                <h5 class="card-title">Content manager meets UX/UI designer and developer</h5>
                <p class="card-text">A seasoned user of Drupal and WordPress with coding experience and an eye for design, I can manage your content so it???s always on brand and displayed in an engaging way for your users</p>
                <!--<a href="#" class="btn btn-primary">Learn More</a>-->
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card">
              <h5 class="card-header">Data & Analytics</h5>
              <div class="card-body">
                <h5 class="card-title">Make informed desicions and track results</h5>
                <p class="card-text">With experience setting up tracking and pulling reports, I can give you insight into how your website and digital marketing tactics are performing together and make suggestions for improvement</p>
                <!--<a href="#" class="btn btn-primary">Learn More</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5 experience" id="work">
      <div class="container">
          <div class="row">
              <div class="col text-center pb-4">
                  <div class="eyebrow-wrapper">
                  <div class="eyebrow">
                      <h2>Work</h2>
                  </div>
                  </div>
                  <h3>Experience working in complex corporate marketing environments</h3>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="white-box d-sm-flex flex-wrap">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                          aria-orientation="vertical">
                          <!--TAB Nav 1-->
                          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                              aria-selected="true">
                              Genpact</button>
                          <!--TAB Nav 2-->
                          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-profile" type="button" role="tab"
                              aria-controls="v-pills-profile" aria-selected="false">Blackhawk Network</button>
                          <!--TAB Nav 3-->
                          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-messages" type="button" role="tab"
                              aria-controls="v-pills-messages" aria-selected="false">Copart</button>
                      </div>
                      <div class="tab-content p-md-4" id="v-pills-tabContent">
                          <!--TAB Content 1-->
                          <div class="tab-pane fade show active" id="v-pills-home"
                              role="tabpanel" aria-labelledby="v-pills-home-tab">
                              <div class="accordion-item">
                                  <!--Accordion Header 1-->
                                  <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                      Genpact
                                    </button>
                                  </h2>
                                  <!--END Accordion Header 1-->
                                  <div id="flush-collapseOne" class="accordion-collapse collapse p-md-0 p-4" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                      <div class="tab-pane-left">
                                        <div class="d-flex mb-3">
                                          <div class="tab-icon">
                                            <img src="/assets/genpact-logo-square.jpeg" alt="">
                                          </div>
                                          <div class="ms-2">
                                            <h4>Web Content Specialist</h4>
                                            <h5>February 2020 - Present</h5>
                                          </div>
                                        </div>
                                        <div class="eyebrow-wrapper">
                                          <div class="eyebrow-blue-left">
                                            <p class="bold">Background:</p>
                                          </div>
                                        </div>
                                        <p>Worked for Genpact's Marketing as a Service (MaaS) team on the Baker Hughes account.</p>
                                        <p class="bold">Accomplishments:</p>
                                        <p>Had contract extended by Baker Hughes and added several team members, growing the account.</p>
                                        <div><img src="/assets/screenshots/bakerhughes-screenshot.jpg" alt=""></div>
                                      </div>
                                      <div class="tab-pane-right">
                                          <h5>Skills</h5>
                                          <p>Web Content Management</p>
                                          <p>Web Design</p>
                                          <p>SEO</p>
                                          <p>CSS</p>
                                          <p>HTML</p>
                                          <h5>Marketing Stack</h4>
                                          <p>Drupal 8</p>
                                          <p>Bynder DAM</p>
                                          <p>Acquia DAM</p>
                                          <p>Marketo</p>
                                          <p>Google Analytics</p>
                                          <p>Kapost</p>
                                          <p>Figma</p>
                                          <p>Photoshop</p>
                                          <!--<div><button class="btn btn-primary-body">View Work</button></div>-->
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--END Tab Content 1-->
                          <!--Tab Content 2-->
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                              aria-labelledby="v-pills-profile-tab">
                              <div class="accordion-item">
                                  <!--Accordion Header 2-->
                                  <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                      Blackhawk Network
                                    </button>
                                  </h2>
                                  <!--END Accordion Header 2-->
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse p-md-0 p-4" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                      <div class="tab-pane-left">
                                        <div class="d-flex mb-3">
                                          <div class="tab-icon">
                                            <img src="/assets/bhn-logo-square.jpeg" alt="">
                                          </div>
                                          <div class="ms-2">
                                            <h4>Digital Marketing Specialist</h5>
                                            <h5>May 2019 ??? February 2020</h4>
                                          </div>
                                        </div>
                                        <div class="eyebrow-wrapper">
                                          <div class="eyebrow-blue-left">
                                            <p class="bold">Background:</p>
                                          </div>
                                        </div>
                                        <p>Joined Blackhawk Network in the marketing department as a Digital Marketing Specialist for the Lead Demand Generation team.</p>
                                        <p class="bold">Accomplishments:</p>
                                        <p>Executed the re-development of the current Blackhawk Network website as a part of a larger rebrand of the company. Development consisted of a complete overhaul of HTML/CSS templates in WordPress as well as editing some JS and PHP. New website became a lead generation engine by creating and embedding Marketo forms to pages, optimizing pages for SEO and simplifying information architecture for users.</p>
                                        <div><img src="/assets/screenshots/bhn-screenshot.jpg" alt=""></div>
                                      </div>
                                      <div class="tab-pane-right">
                                          <h5>Skills</h5>
                                          <p>CSS</p>
                                          <p>HTML</p>
                                          <p>PHP</p>
                                          <p>JS</p>
                                          <h5>Marketing Stack</h5>
                                          <p>Drupal 8</p>
                                          <p>Wordpress</p>
                                          <p>Marketo</p>
                                          <p>Google Analytics</p>
                                          <p>Google Data Studio</p>
                                          <p>Google Tag Manager</p>
                                          <p>Photoshop</p>
                                          <p>Indesign</p>
                                          <p>Illustrator</p>
                                          <p>Google Ads</p>
                                          <p>LinkedIn Ads</p>
                                          <p>Facebook Ads</p>
                                          <p>AdRoll</p>
                                          <p>Terminus</p>
                                          <!--<div><button class="btn btn-primary-body">View Work</button></div>-->
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--END Tab Content 2-->
                          <!--Tab Content 3-->
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                              aria-labelledby="v-pills-messages-tab">
                              <div class="accordion-item">
                                  <!--Accordion Header 3-->
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      Copart
                                    </button>
                                  </h2>
                                  <!--END Accordion Header 3-->
                                  <div id="flush-collapseThree" class="accordion-collapse collapse p-md-0 p-4" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                      <div class="tab-pane-left">
                                        <div class="d-flex mb-3">
                                          <div class="tab-icon">
                                            <img src="/assets/copart-logo-square.jpeg" alt="">
                                          </div>
                                          <div class="ms-2">
                                            <h4>Online Marketing Coordinator</h4>
                                            <h5>May 2018 ??? May 2019</h5>
                                          </div>
                                        </div>
                                        <div class="eyebrow-wrapper">
                                          <div class="eyebrow-blue-left">
                                            <p class="bold">Background:</p>
                                          </div>
                                        </div>
                                        <p>Started as an intern at Copart's headquarters in Dallas, Texas in the marketing department. I was then promoted to Online Marketing Coordinator after 6 months.</p>
                                        <p class="bold">Accomplishments:</p>
                                        <p>Voted "Most Outstanding Marketing Team Member" by peers in August 2018.</p>
                                        <div><img src="/assets/screenshots/copart-screenshot.jpg" alt=""></div>
                                      </div>
                                      <div class="tab-pane-right">
                                          <h5>Skills</h5>
                                          <p>CSS</p>
                                          <p>HTML</p>
                                          <h5>Marketing Stack</h5>
                                          <p>Drupal</p>
                                          <p>Wordpress</p>
                                          <p>Adobe Analytics</p>
                                          <p>Google Analytics</p>
                                          <p>Revive Adserver</p>
                                          <p>Survey Monkey</p>
                                          <p>Basecamp</p>
                                          <!--<div><button class="btn btn-primary-body">View Work</button></div>-->
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--END Tab Content 3-->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <div class="container text-center web-icons">
      <div class="row pb-2 pb-md-4">
        <h3>This website was personally built and designed using</h3>
      </div>
      <div class="row">
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://getbootstrap.com/" target="_blank"><svg class="bootstrap" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Bootstrap icon</title><path d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://gulpjs.com/" target="_blank"><svg class="gulp" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>gulp</title><path d="M5.936 4.694c-.336 0-.675.078-1.013.222-.34.145-.676.346-1.007.605a7.133 7.133 0 00-.97.917c-.313.354-.61.745-.887 1.164-.276.42-.533.867-.78 1.32h-.001v.001c-.239.473-.448.96-.63 1.455-.18.496-.324.993-.438 1.497-.11.5-.178.987-.2 1.465a.515.515 0 00-.01.091v.095c0 .261.038.53.075.776v.002l.001.002c.068.262.175.504.31.717a1.7 1.7 0 00.537.518c.217.138.474.207.776.207.263 0 .536-.06.817-.185.279-.125.557-.288.834-.479.268-.192.536-.412.794-.66.207-.192.396-.392.583-.59l-.196.608c-.085.293-.18.576-.257.853-.085.274-.152.52-.209.738-.057.216-.096.362-.096.456v.215c0 .241.025.411.104.518a.398.398 0 00.333.152.435.435 0 00.265-.095c.081-.06.15-.137.219-.224v-.002l.002-.001c.057-.087.115-.18.164-.278.05-.101.078-.19.107-.269v-.001l.067-.24.143-.495.19-.662c.076-.247.142-.495.227-.747l.225-.75c.072-.244.14-.465.203-.661.063-.2.116-.362.16-.493.02-.065.04-.116.054-.154l.014-.032.04.018.018-.048c.076-.218.151-.427.227-.626.076-.2.152-.4.21-.597a3.762 3.762 0 00.22-1.29.637.637 0 00-.05-.255.44.44 0 00-.124-.18.499.499 0 00-.174-.1.622.622 0 00-.19-.03.655.655 0 00-.378.127c-.129.086-.225.229-.297.422v.001l-.55 1.764a3.91 3.91 0 01-.317.513v.001a9.407 9.407 0 01-1.71 1.832c-.207.17-.404.301-.6.404a1.063 1.063 0 01-.5.146.48.48 0 01-.312-.103.637.637 0 01-.204-.275 1.582 1.582 0 01-.102-.387 3.182 3.182 0 01-.028-.422c0-.413.066-.874.198-1.394.132-.52.312-1.04.539-1.579.227-.54.492-1.06.786-1.571.293-.511.605-.965.926-1.362.32-.396.64-.706.97-.95.327-.244.62-.362.902-.362a.88.88 0 01.497.145c.152.098.29.263.42.496v-.001c.134.259.269.46.385.606.12.15.259.227.408.227a.51.51 0 00.416-.208c.115-.138.17-.327.17-.556 0-.096-.01-.2-.03-.307a.87.87 0 00-.14-.334c-.314-.47-.651-.807-1.01-1.024H7.06a2.216 2.216 0 00-1.125-.317zm10.961.855a.802.802 0 00-.41.12h-.001l-.001.001a.85.85 0 00-.318.43l-1.889 4.758-.417 1.045c-.153.38-.295.76-.447 1.148a4.792 4.792 0 00-.176.551 4.995 4.995 0 01-.257.215c-.207.16-.403.281-.589.365h-.002c-.184.093-.339.129-.463.129-.082 0-.137-.02-.172-.053-.035-.033-.056-.084-.056-.166 0-.185.028-.39.084-.615.057-.22.132-.451.217-.683a8.73 8.73 0 01.274-.69l.276-.644c.086-.2.153-.382.21-.534a1.15 1.15 0 00.089-.377.71.71 0 00-.143-.437.474.474 0 00-.39-.19.466.466 0 00-.378.179 1.514 1.514 0 00-.254.42 3.917 3.917 0 00-.201.537c-.056.19-.131.368-.207.535-.113.25-.246.524-.416.826a6.64 6.64 0 01-.565.849c-.207.26-.432.479-.675.654-.24.175-.495.257-.75.257-.083 0-.138-.03-.167-.088a.472.472 0 01-.052-.225c.01-.204.046-.419.112-.643.066-.222.141-.443.226-.66.085-.21.18-.424.283-.625.105-.201.2-.391.294-.56v-.001l.248-.47c.068-.136.107-.243.135-.33l.001-.002v-.001c.01-.04.021-.09.021-.145a.419.419 0 00-.054-.214v-.001l-.001-.001a.526.526 0 00-.335-.238.65.65 0 00-.588.103c-.132.091-.231.232-.319.426a23.085 23.085 0 00-.79 1.817c-.19.505-.323.914-.418 1.229a4.666 4.666 0 00-.163.7v.001l-.02.231v.002c0 .214.029.4.09.55v.002c.068.147.148.266.249.357a.893.893 0 00.36.191c.132.04.27.059.41.059.311 0 .598-.058.861-.155s.501-.232.714-.396c.21-.163.4-.346.563-.548.12-.14.21-.285.3-.427-.04.22-.078.437-.078.614 0 .33.063.57.202.717a.695.695 0 00.523.214c.208 0 .439-.057.694-.17.253-.113.51-.262.77-.446.065-.045.127-.093.19-.141l.005.036a1 1 0 00.15.35h.001l.001.002c.08.099.17.18.291.24.123.062.273.091.45.091.253 0 .516-.059.787-.175h.002c.268-.125.537-.279.805-.48.268-.201.545-.44.812-.697l.01-.009c-.046.106-.09.212-.138.319-.219.484-.442.972-.674 1.471-.233.5-.466.994-.684 1.488l-.001.003-.001.002a3.93 3.93 0 01-.104.278c-.036.092-.085.188-.115.298v.001c-.037.1-.075.198-.095.306-.03.11-.04.217-.04.315 0 .208.059.367.172.447a.67.67 0 00.398.115c.122 0 .234-.03.335-.08v-.001h.001a.95.95 0 00.263-.22c.076-.09.14-.192.198-.308.059-.117.107-.242.154-.365l.002-.004v-.004c.008-.037.037-.121.084-.244l.162-.436.19-.512.199-.522.17-.435c.048-.124.077-.21.095-.255v-.001c.019-.038.048-.095.085-.189l.133-.313.161-.37.172-.38.142-.342.103-.226.001-.001c.085-.17.188-.358.302-.566v-.001c.123-.207.255-.405.396-.612v-.001c.152-.2.302-.397.463-.585.161-.187.33-.347.5-.498.173-.14.346-.262.521-.345a1.14 1.14 0 01.499-.128c.086 0 .143.018.178.039a.135.135 0 01.042.103c0 .08-.043.207-.144.353v.001c-.104.16-.226.33-.377.519-.162.19-.323.389-.503.597-.18.21-.352.419-.514.628a6.18 6.18 0 00-.412.603v.001a1.518 1.518 0 00-.205.53v.007a.193.193 0 01-.004.022c-.003.01-.006.014-.006.035v.057c0 .257.092.465.274.606.183.152.441.22.76.22.349 0 .67-.068.97-.204.298-.134.605-.316.92-.556h.001c.315-.236.64-.517.991-.843.341-.325.739-.685 1.184-1.08a.847.847 0 00.262-.352c.059-.138.089-.275.089-.41a.635.635 0 00-.082-.324.278.278 0 00-.248-.148.369.369 0 00-.164.043c-.053.026-.109.06-.17.101-.104.033.017.063.03.108-.538.481-1.004.887-1.373 1.206-.38.332-.699.588-.946.788a5.893 5.893 0 01-.574.41c-.132.079-.233.117-.289.117-.078 0-.132-.02-.156-.043a.142.142 0 01-.043-.108c0-.007.01-.036.035-.075.026-.04.065-.091.117-.152l.398-.465c.162-.181.324-.381.504-.6.18-.22.35-.447.502-.682.16-.23.285-.467.39-.7.101-.233.156-.455.156-.666a.837.837 0 00-.106-.426.92.92 0 00-.277-.3c-.11-.08-.238-.14-.375-.181h-.001a1.557 1.557 0 00-1.043.073 3.064 3.064 0 00-.598.332 5.677 5.677 0 00-.565.45 9.89 9.89 0 00-.38.378l.036-.176c.015-.073.025-.141.034-.207v-.001c.01-.068.013-.116.013-.149a.529.529 0 00-.126-.373v-.001h-.002c-.087-.09-.222-.129-.4-.129-.122 0-.24.07-.34.19a2.18 2.18 0 00-.263.418 4.225 4.225 0 00-.202.48l-.133.378v.001c-.046.159-.097.321-.15.485-.014.004-.027.008-.041.014a.33.33 0 00-.136.089l.003-.003c-.118.114-.251.247-.399.389-.147.142-.303.284-.464.426-.162.133-.326.275-.49.407-.162.13-.32.245-.471.345-.15.101-.29.18-.419.241a.776.776 0 01-.309.088c-.06 0-.085-.014-.1-.042h-.001a.311.311 0 01-.032-.155c0-.113.02-.243.064-.39.042-.146.086-.274.13-.385l.028-.03.374-.952c.142-.365.294-.746.465-1.152l.513-1.254c.17-.427.342-.84.503-1.234l.475-1.102c.142-.336.266-.619.37-.848l-.001.002c.059-.117.097-.227.135-.32v-.002a.934.934 0 00.055-.297c0-.196-.061-.35-.18-.443a.6.6 0 00-.384-.133Z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank"><svg class="html" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>HTML5 icon</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank"><svg class="css" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>CSS3 icon</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://sass-lang.com/" target="_blank"><svg class="sass" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Sass</title><path d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zM9.615 15.998c.175.645.156 1.248-.024 1.792l-.065.18c-.024.061-.052.12-.078.176-.14.29-.326.56-.555.81-.698.759-1.672 1.047-2.09.805-.45-.262-.226-1.335.584-2.19.871-.918 2.12-1.509 2.12-1.509v-.003l.108-.061zm9.911-10.861c-.542-2.133-4.077-2.834-7.422-1.645-1.989.707-4.144 1.818-5.693 3.267C4.568 8.48 4.275 9.98 4.396 10.607c.427 2.211 3.457 3.657 4.703 4.73v.006c-.367.18-3.056 1.529-3.686 2.925-.675 1.47.105 2.521.615 2.655 1.575.436 3.195-.36 4.065-1.649.84-1.261.766-2.881.404-3.676.496-.135 1.08-.195 1.83-.104 2.101.24 2.521 1.56 2.43 2.1-.09.539-.523.854-.674.944-.15.091-.195.12-.181.181.015.09.091.09.21.075.165-.03 1.096-.45 1.141-1.471.045-1.29-1.186-2.729-3.375-2.7-.9.016-1.471.091-1.875.256-.03-.045-.061-.075-.105-.105-1.35-1.455-3.855-2.475-3.75-4.41.03-.705.285-2.564 4.8-4.814 3.705-1.846 6.661-1.335 7.171-.21.733 1.604-1.576 4.59-5.431 5.024-1.47.165-2.235-.404-2.431-.615-.209-.225-.239-.24-.314-.194-.12.06-.045.255 0 .375.12.3.585.825 1.396 1.095.704.225 2.43.359 4.5-.45 2.324-.899 4.139-3.405 3.614-5.505l.073.067z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://www.javascript.com/" target="_blank"><svg class="js" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>JavaScript icon</title><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://code.visualstudio.com/" target="_blank"><svg class="visual-studio" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Visual Studio Code icon</title><path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.276.057L.327 7.261A1 1 0 0 0 .326 8.74L3.899 12 .326 15.26a1 1 0 0 0 .001 1.479L1.65 17.94a.999.999 0 0 0 1.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352zm-5.146 14.861L10.826 12l7.178-5.448v10.896z"/></svg></a>
        </div>
        <div class="col-4 col-md py-2 py-md-0">
          <a href="https://www.adobe.com/products/xd.html" target="_blank"><svg class="xd" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Adobe XD icon</title><path d="M18.835.3H5.165A5.165 5.165 0 0 0 0 5.465v13.07A5.165 5.165 0 0 0 5.165 23.7h13.67A5.165 5.165 0 0 0 24 18.535V5.465A5.165 5.165 0 0 0 18.835.3zm-6.106 16.491h-2.287c-.16 0-.274-.006-.338-.113-.215-.419-.43-.835-.644-1.248a45.137 45.137 0 0 0-.684-1.264 66.961 66.961 0 0 1-.717-1.305h-.016a52.7 52.7 0 0 1-.668 1.288c-.23.429-.459.856-.684 1.28A54.85 54.85 0 0 1 6 16.693c-.044.097-.119.107-.227.107H3.568c-.043 0-.067.017-.072-.026a.166.166 0 0 1 .024-.113l3.107-5.105L3.6 6.438c-.033-.043-.038-.078-.016-.107a.115.115 0 0 1 .097-.04h2.27a.36.36 0 0 1 .145.024.292.292 0 0 1 .096.089c.193.43.408.859.644 1.288.236.429.475.853.716 1.272.241.419.464.843.668 1.272h.016c.213-.44.43-.869.652-1.288.222-.419.447-.84.676-1.264.231-.425.453-.847.668-1.264a.246.246 0 0 1 .064-.106.239.239 0 0 1 .129-.024h2.109a.093.093 0 0 1 .112.067.093.093 0 0 1-.031.094l.001.004-2.995 4.943 3.204 5.249c.021.037.026.08.016.121-.01.036-.047.012-.112.023zm7.681-.42a8.02 8.02 0 0 1-1.626.483 8.63 8.63 0 0 1-1.547.145 5.006 5.006 0 0 1-2.149-.45 3.421 3.421 0 0 1-1.506-1.361 4.348 4.348 0 0 1-.548-2.278 4.202 4.202 0 0 1 .548-2.109 4.018 4.018 0 0 1 1.595-1.545 5.139 5.139 0 0 1 2.737-.572c.086.005.188.013.306.024V5.536c0-.075.032-.113.097-.113h2.028a.086.086 0 0 1 .097.073.096.096 0 0 1 0 .024v9.517c0 .183.008.381.024.596.016.214.03.407.04.579a.163.163 0 0 1-.096.159zm-2.457-5.812c.09.009.179.025.266.048v4.395a1.634 1.634 0 0 1-.354.064 4.965 4.965 0 0 1-.419.016 2.656 2.656 0 0 1-.83-.129 1.714 1.714 0 0 1-.676-.402 1.973 1.973 0 0 1-.451-.708 2.83 2.83 0 0 1-.169-1.031 2.217 2.217 0 0 1 .33-1.272c.213-.316.504-.571.845-.741.35-.173.736-.262 1.127-.258.111.002.221.007.331.018z"/></svg></a>
        </div>
      </div>
    </div>
    <div style="background-color: #E0EEFF;" class="container-fluid py-5" id="contact">
      <div class="container">
        <div class="row">
          <div class="col text-center pb-4">
            <div class="eyebrow-wrapper">
              <div class="eyebrow-blue-center">
                <h2>Say 'What's Up'</h2>
              </div>
            </div>
            <h3>Hit me up using the form below</h3>
          </div>
        </div>
        <div class="container" style="max-width: 840px;">
          <div class="row">
            <div class="col-12">
              <form action="contact.php" id="contact-form" method="post" role="form" class="needs-validation" novalidate>
              <div class="messages"></div>
                <div class="row">
                  <div class="col-12 col-md-6 mb-3">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="name" name="user_name" placeholder="Name" required data-error="Name is required.">
                      <label for="name" class="form-label">Full Name</label>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                    <div class="form-floating">
                      <input type="email" class="form-control" id="email" name="user_email" placeholder="Email Address" required>
                      <label for="email" class="form-label">Email Address</label>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-floating">
                  <textarea class="form-control" id="message" name="user_message" placeholder="Message" style="height: 140px" required></textarea>
                  <label for="message" class="form-label">What can I help you out with?</label>
                  <div class="help-block with-errors"></div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="d-flex justify-content-start pt-1">
              <div class="pe-2 ps-1">
                <img src="assets/website-logo-blue.png" alt="" width="25" height="25">
              </div>
              <h4>mjkaskie.</h4>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <ul class="list-unstyled d-flex justify-content-md-end justify-content-start">
              <li><a class="link-secondary text-decoration-none" href="https://www.linkedin.com/in/mjkaskie/" target="_blank"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn icon</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a></li>
              <li><a class="link-secondary text-decoration-none" href="https://github.com/mkaskie" target="blank"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg></a></li>
              <li><a class="link-secondary text-decoration-none" href="https://open.spotify.com/user/mkaskie?si=e14c6fdeef044356" target="_blank"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Spotify</title><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg></a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="https://soundcloud.com/mitchell-kaskie" target="_blank"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>SoundCloud</title><path d="M1.175 12.225c-.051 0-.094.046-.101.1l-.233 2.154.233 2.105c.007.058.05.098.101.098.05 0 .09-.04.099-.098l.255-2.105-.27-2.154c0-.057-.045-.1-.09-.1m-.899.828c-.06 0-.091.037-.104.094L0 14.479l.165 1.308c0 .055.045.094.09.094s.089-.045.104-.104l.21-1.319-.21-1.334c0-.061-.044-.09-.09-.09m1.83-1.229c-.061 0-.12.045-.12.104l-.21 2.563.225 2.458c0 .06.045.12.119.12.061 0 .105-.061.121-.12l.254-2.474-.254-2.548c-.016-.06-.061-.12-.121-.12m.945-.089c-.075 0-.135.06-.15.135l-.193 2.64.21 2.544c.016.077.075.138.149.138.075 0 .135-.061.15-.15l.24-2.532-.24-2.623c0-.075-.06-.135-.135-.135l-.031-.017zm1.155.36c-.005-.09-.075-.149-.159-.149-.09 0-.158.06-.164.149l-.217 2.43.2 2.563c0 .09.075.157.159.157.074 0 .148-.068.148-.158l.227-2.563-.227-2.444.033.015zm.809-1.709c-.101 0-.18.09-.18.181l-.21 3.957.187 2.563c0 .09.08.164.18.164.094 0 .174-.09.18-.18l.209-2.563-.209-3.972c-.008-.104-.088-.18-.18-.18m.959-.914c-.105 0-.195.09-.203.194l-.18 4.872.165 2.548c0 .12.09.209.195.209.104 0 .194-.089.21-.209l.193-2.548-.192-4.856c-.016-.12-.105-.21-.21-.21m.989-.449c-.121 0-.211.089-.225.209l-.165 5.275.165 2.52c.014.119.104.225.225.225.119 0 .225-.105.225-.225l.195-2.52-.196-5.275c0-.12-.105-.225-.225-.225m1.245.045c0-.135-.105-.24-.24-.24-.119 0-.24.105-.24.24l-.149 5.441.149 2.503c.016.135.121.24.256.24s.24-.105.24-.24l.164-2.503-.164-5.456-.016.015zm.749-.134c-.135 0-.255.119-.255.254l-.15 5.322.15 2.473c0 .15.12.255.255.255s.255-.12.255-.27l.15-2.474-.165-5.307c0-.148-.12-.27-.271-.27m1.005.166c-.164 0-.284.135-.284.285l-.103 5.143.135 2.474c0 .149.119.277.284.277.149 0 .271-.12.284-.285l.121-2.443-.135-5.112c-.012-.164-.135-.285-.285-.285m1.184-.945c-.045-.029-.105-.044-.165-.044s-.119.015-.165.044c-.09.054-.149.15-.149.255v.061l-.104 6.048.115 2.449v.008c.008.06.03.135.074.18.058.061.142.104.234.104.08 0 .158-.044.209-.09.058-.06.091-.135.091-.225l.015-.24.117-2.203-.135-6.086c0-.104-.061-.193-.135-.239l-.002-.022zm1.006-.547c-.045-.045-.09-.061-.15-.061-.074 0-.149.016-.209.061-.075.061-.119.15-.119.24v.029l-.137 6.609.076 1.215.061 1.185c0 .164.148.314.328.314.181 0 .33-.15.33-.329l.15-2.414-.15-6.637c0-.12-.074-.221-.165-.277m8.934 3.777c-.405 0-.795.086-1.139.232-.24-2.654-2.46-4.736-5.188-4.736-.659 0-1.305.135-1.889.359-.225.09-.27.18-.285.359v9.368c.016.18.15.33.33.345h8.185C22.681 17.218 24 15.914 24 14.28s-1.319-2.952-2.938-2.952"/></svg></a></li>
              <li><a class="link-secondary text-decoration-none" href="https://www.instagram.com/mkaskie/" target="_blank"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a></li>
              <li><a class="link-secondary text-decoration-none" href="https://twitter.com/MjKaskie" target="_blank"><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Twitter icon</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a></li>
              <li><a class="link-secondary text-decoration-none" href="https://www.facebook.com/mitchell.kaskie13/" target="_blank"><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Facebook icon</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
  <script src="contact.js"></script>
</body>
</html>