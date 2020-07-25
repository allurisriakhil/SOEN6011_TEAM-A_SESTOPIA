@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="help-center-home.html">Skills</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="help-center-category.html">Skill Name</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <h2 class="h1 mt-4">Regression Testing </h2>
                <div class="lead">Consectetur adipiscing elit. Phasellus feugiat elit.</div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-10">
                        <article class="article">
                            <h3 class="h2">Classification of Regression Testing</h3>
                            <p>
                                There are various types of Regression testing :<br>
                                1. Reset all<br>
                                2. Regression test selection<br>
                                3. Test case prioritization<br>
                                4. Hybrid<br>

                                <br>

                                <h4> Reset-all </h4>
                                <p>This technique checks all the test cases on the current program to check its integrity. Though it is expensive as it needs to re-run all the cases, it ensures that there are no errors because of the modified code.[1]</p>

                                <h4>Regression test selection</h4>
                                <p>Unlike Retest all, this technique runs a part of the test suite (owing to the cost of retest all) if the cost of selecting the part of the test suite is less than the Retest all technique.[1]</p>

                                <h4>Test case prioritization</h4>
                                <p>Prioritize the test cases so as to increase a test suite's rate of fault detection. Test case prioritization techniques schedule test cases so that the test cases that are higher in priority are executed before the test cases that have a lower priority.[1]</p>
                                <h5>Types of test case prioritization</h5>
                                <p> 1. General prioritization – Prioritize test cases that will be beneficial on subsequent  versions<br>
                                    2. Version-specific prioritization – Prioritize test cases with respect to a particular version of the software<br>
                                </p>

                                <h4>Hybrid</h4>
                                <p>This technique is a hybrid of regression test selection and test case prioritization.[1]</p>


                            </p>

                            <h3>Prerequisites for Regression Testing</h3>
                            <p>
                                
                               1. A new requirement is added to an existing feature<br>
                               2. A new feature or functionality is added<br>
                               3. The codebase is fixed to solve defects<br>
                               4. The source code is optimized to improve performance<br>
                               5. Patch fixes are added<br>
                               6. Changes in configuration<br>
                               7. No changes must be allowed to code, during the regression test phase.<br>
                               8. Regression test code must be kept immune to developer changes.<br>
                               9. The database used for regression testing must be isolated.<br>
                               10. No database changes must be allowed.<br>
                               11. Code being regression tested should be under a configuration management tool<br>
                            </p>


                            <h3>Related Software Engineering Area </h3>
                            <p>
                                Dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae enim lacinia semper. Cras nulla lectus, porttitor vitae urna iaculis, melisandre tincidunt lectus. Brienne nec tellus sit amet massa auctor imperdiet id vitae diam.
                            </p>

                            <h3> Rationale for Regression Testing</h3>
                            <p>
                                Gravida est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est
                                nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                            </p>

                            <h3> Role for regression testing </h3>
                            <p>
                            </p>

                            <h3>Work Related to Skill </h3>
                            <p>
                            </p>

                            <h3> Real-World Example/Scenario of Skill </h3>
                            <p>
                            </p>

                            <h3> Role of Academia or Industry in Cultivating the Skill</h3>
                            <p>
                            </p>

                            <h3> Tools Supporting the Skill </h3>
                            <p> <h4>1.Katalon Studio</h4>
                                <p>Katalon Studio is an end-to-end automation solution that supports functional and regression testing, transforming these processes into easy and simple tasks for testers. 

                                 Katalon Studio provides an all-in-one regression testing tool for your website, web services, and mobile application. The tool also supports running scripts on multiple devices, browsers, and environments. 
                                 </p>

                                <h4>2.Selenium</h4>
                                <p>Selenium offers a set of features used to automate web applications. It remains among the top tools for browser-based and cross-platform regression testing. Selenium supports automated test scripts that cycle through data sets and data-driven tests. This is a proper solution for large-scale quality assurance teams with advanced testers. However, its steep learning curve becomes a hindrance for small and mid-size teams.
                                 </p>

                                 <h4>3.IBM Rational Functional Tester</h4>
                                 <p> Rational Functional Tester, or RFT, is a tool for software test automation from IBM. RFT can be used for a wide range of software testing types, including functional, regression, GUI, and data-driven testing, and applications (web-based, .Net, Java, Siebel, SAP), and more</p>
                                
                                <h4>4.Apache JMeter</h4>
                                <p> Apache JMeter is an open-source test automation software used to load functional test behaviors and measure test performance. It is capable of many testing features, including support for load and performance tests on many different applications, server or protocol, as well as providing a whole regression test suite for the end users.</p>


                            </p>

                            <h3>Skill Self-Assessment</h3>
                            <p>
                            </p>

                            <h3>References</h3>
                            <p>
                            </p>

                        </article>
                        <div class="my-4 my-sm-5 card card-body flex-sm-row justify-content-between align-items-center">
                            <div class="h5 mb-sm-0">Did you find this helpful?</div>
                            <div class="d-flex">
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1">Yes</a>
                                <a href="#" class="btn btn-sm btn-outline-primary mx-1">No</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col sticky-lg-top">
                <div class="pl-xl-4">
                    <div class="list-group mb-3 mb-md-4">
                        <div class="list-group-item">
                            <h6 class="mb-0">Similar Articles</h6>
                        </div>
                        <div class="list-group-item">
                            <a href="#">Cancelling your subscription</a>
                            <div class="text-small">Donec a leo ac diam vulputate khaleesi eget est.</div>
                        </div>
                        <div class="list-group-item">
                            <a href="#">Upgrading your plan</a>
                            <div class="text-small">Volantis phasellus tincidunt vitae libero efficitur viverra.</div>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h6 class="mb-2">Email Us</h6>
                            <a href="#">hello@jumpstart.io</a>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-2">Call any time</h6>
                            <a href="#">1800 488 328</a>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-2">Get in touch</h6>
                            <a href="contact-1.html">Leave a message</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block mt-3 mt-md-4">Open a Suport Ticket</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection