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
                <h2 class="h1 mt-4">High Quality Documentation</h2>
                <div class="lead">Consectetur adipiscing elit. Phasellus feugiat elit.</div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-10">
<style>
    body{
        background-color: white;
        font-family: "JetBrains Mono";
    }
    h1{
        color: grey;
        font-family:"Gill Sans MT Condensed";
    }
    skill_Name {
        width: 500px;
        border: 15px dodgerblue;
        padding: 50px;
        margin: 20px;

    }
    Classification {
        width: 300px;
        border: 15px dodgerblue;
        padding: 50px;
        margin: 20px;
        Outline-color:blue;

    }
    Prerequisite{
        width: 300px;
        padding: 50px;
        margin: 20px;
        Outline-color:blue;
        text-align: match-parent;
        border: 15px solid dodgerblue;
    }


</style>
<body>
<div class ="skill_Name">
<h1 > SKILL NAME:</h1>
<p> High Quality Documentation for software maintenance(Code and Design Documentation).</p>
</div>
<!-- Demarcation  -->

<div class ="Classification">
    <h1 > CLASSIFICATION OF SKILL:</h1>
    <p> Classified under software maintenance knowledge area,  as one of the required skills for developers to aid software
        maintenance which is vital bcos of the need to understand the code base . High Quality Documentation skill can be
        classified under the Software Maintenance knowledge area as one of the required skills for software developers to
        aid further maintenance, refactoring and knowledge transfer of the software system over time, it is important for
        software comprehension. </p>
</div>
<!-- Demarcation  -->
<div class ="Prerequisite">
    <h1 title="Prerequisite For Skill"> PREREQUISITE FOR SKILL:</h1>
    <p>  Some of the prerequisites that are expected of a software developer trying to document a software system includes the following:<br>
        --  Proper knowledge of the basics of programming and a programming language;the knowledge of the basics of programming language helps
            a software maintainer to decipher the source code of  a software system.<br>
        -- Understanding  a number of software engineering principles such as the principle of separation of concerns (Separating documentation
           in terms of structure, content and layout).<br>
         --Proper knowledge of the  difference between high quality documentation for software maintenance, user manual  and technical writing,
                     the goal of technical  writing is to explain utilization of a technology to a non-expert user, to convey complex information
                      in a simple format.(Hariharan,2020 ).While the goal of the high quality documentation for software  maintenance is to aid the
                       understanding and updating  of a software system (source code, design decisions etc)
                     after it has been deployed.<br>
           -- Adequate knowledge of the domain for the  software being documented.<br>
                  -- Computational Thinking,the ability to think in a computational manner   aids the  understanding of the  problem being solved
                     and the solution provided  by the software system.<br>
              </p>
</div>
<div class ="RelatedAreas">
    <h1 > RELATED SOFTWARE ENGINEERING AREAS:</h1>
    <p>  Although the focus of this skill is mostly the code documentation and Design Documentation there are other forms of documentation
        in a software project that are considered important for software maintenance such as requirement documentation and user manual, etc.
        As such the following knowledge areas are considered related to the documentation skill:<br>
        Software Maintenance:  This is one of the driving forces for this skill. Code and Design Documentation  is considered important to maintainers
        of a software system because it makes information about the design decisions made by the programmers, architect of the software system, easily
        and readily available .Thus improving the mental model of the maintainers regarding the software system, which improves their understanding of
        the system ultimately making it easier to maintain the system.<br>
        Software Requirements: In this knowledge area one of the artifacts produced at this phase of a software development process is the requirements
        Documentation and  this artifact requires the documentation skill.The software requirement specification document is used to communicate the
        objective and functionality of the system to the stakeholders.<br>
        Software Design:The major artifact produced in this knowledge area is the design documentation which includes information about all the major
        design decisions that were taken during the development of  the software system, this documentation also requires the documentation skill and
        it adds to the mental model of the maintainer regarding the software system.<br>
        Software Construction:This knowledge area  produces the source code with comments(for maintenance). This process of including proper comments
        in the source code,could also benefit from the proper documentation skill as such this knowledge area is included in the related software engineering
        areas.<br>
        .<br>
    </p>
</div>



</body>
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
