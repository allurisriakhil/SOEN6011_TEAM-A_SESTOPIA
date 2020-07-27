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
                                <a href="help-center-category.html">Verification and Validation</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <h2 class="h1 mt-4">Verification and Validation</h2>
                <h2>Classifiaction of Skill</h2>
                <p>Software Quality</p>
                <div class="lead">Consectetur adipiscing elit. Phasellus feugiat elit.</div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-10">
                        <article class="article">
                            <h3 class="h2">Introduction to Verification and Validation</h3>
                            <p>
                                Verification and validation are independent procedures that are used together for checking that a product, service, or system meets requirements and specifications and that it fulfills its intended purpose.[1] These are critical components of a quality management system such as ISO 9000.
                            </p>
                                  <ul>
                                 <li>Validation:. The assurance that a product, service, or system meets the needs of the customer and other identified stakeholders. It often involves acceptance and suitability with external customers. Contrast with verification.</li>
                                 <li>Verification: The evaluation of whether or not a product, service, or system complies with a regulation, requirement, specification, or imposed condition. It is often an internal process. Contrast with validation.</li>
                                                                  
                                 </ul>

                                 <h2>Rationale for Skill</h2>

                            <p>
                                  Validation:External validation happens when it is performed by asking the stakeholders if the software meets their needs. Different software development methodologies call for different levels of user and stakeholder involvement and feedback; so, external validation can be a discrete or a continuous event. Successful final external validation occurs when all the stakeholders accept the software product and express that it satisfies their needs. Such final external validation requires the use of an acceptance test which is a dynamic test.However, it is also possible to perform internal static tests to find out if it meets the requirements specification but that falls into the scope of static verification because the software is not running.
                            </p>
                            <p>
                              Verification:software verification ensures that the output of each phase of the software development process effectively carry out what its corresponding input artifact specifies (requirement -> design -> software product), while software validation ensures that the software product meets the needs of all the stakeholders (therefore, the requirement specification was correctly and accurately expressed in the first place). Software verification ensures that "you built it right" and confirms that the product, as provided, fulfills the plans of the developers. Software validation ensures that "you built the right thing" and confirms that the product, as provided, fulfills the intended use and goals of the stakeholders.
                            </p>
                            <p>
                                Gravida est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est
                                nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
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
