@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex">
                    @include('skills.partials.breadcrumbs', ['skill' => $skill])
                </div>
                <h2 class="h1 mt-4">Planning Measurement Process</h2>
				<img src="https://geekybytes.net/wp-content/uploads/2019/02/107953-quando-mudar-de-software-de-gestao-escolar-veja-12-sinais.jpg" width="150" height="150" right="500"> 
                <div class="lead"><p>Measurement is an important aspect of all engineering disciplines. It is primarily used as a tool for comparison and allows feasible decision making.</p>
                    <p style="color: red;text-align: center;font-family: cursive;"><q>It doesn't matter how fast you climb if the ladder's against the wrong wall.</q></p>

								  <br> Software Measurement plays a vital role in the evaluation of a Software Process. Analyzing accurate measurement results will lead to improved productivity and quality of products.The two main concerns for improving the software process are efficiency and effectiveness[1].
                                Simply, measuring efficiency will show if the software is functioning properly and delivering proper results with lesser effort and measuring effectiveness shows if the results obtained meet the expected defined results. Both of these provide means to improve Software Process. </div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-10">
                        <article class="article">
                            <h3 class="h2">Classification of Skill</h3>
                            <p>
                                Planning Measurement Process is a technical skill. It mainly concerns the requirement, definition, analysis and evolution of measurement attributes.
                                To get the best results, Planning is recommended prior to the development process so that necessary changes can be made while developing the software product. After planning the process comes the part where the plan is executed and later on improved by evolving plans as the producgt gets developed and there are different measurement needs.  
                            </p>
                            <h3 class="h2">Prerequisites for Skill</h3>
                            <p>
                                Software Requirements Analysis.							
                            </p>
                            <h3 class="h2">Related Software Engineering Area(s)</h3>
                            <p>
                                Software Testing, Quality.
                            </p>
                            <h3 class="h2">Rationale for Skill</h3>
                            <p>
                                Planning Measurement Process is an important skill and it was chosen becasue it shows if the product has met the requirements and how efficient a process is. This can be used as a reference for future software development purposes and help software engineers to work on the adequate process with better results and minimal effort.
                            </p>
                            <h3 class="h2">Roles for Skill</h3>
                            <p>
                                Elicitation plays an essential role in requirement engineering and in the assurance of project's success in the highest quality possible, without digression from the main functional and non-functional requirements. 
                                Some of the roles elicitation plays, is brainstorming for new ideas for the system-to-be. 
                                Both, the Stakeholders and the eliciting project development team in continous discussions and negotiations, and there is a vast amount of information flowing. 
                            </p>
                            <h3 class="h2">Work Related to Skill (Related Activities and Artifacts)</h3>
                            <p>
                                person-hours, person-days, staff- weeks, or staff-months of effort or in equivalent monetary units—such as euros or dollars.  measurement of software defects discovered and corrected during software testing.
                                </p
                            <h3 class="h2">Real-World Example/Scenario of Skill (Text, Graphic, Audio, Video)</h3>
                            <p>  If projects are finding a large
                                percent of their problems from system-level or field-level testing, the organization may need
                                to implement a more rigorous design and code inspection process, or provide training on unit
                                testing (i.e., focus improvement on earlier phases of the development process). Once
                                process improvements are implemented, measurement helps to assess and evaluate the
                                success of process improvement activities
                            </p>
                            <h3 class="h2">Role of Academia or Industry in Cultivating the Skill</h3>
                            <p>
                            </p>
                            <h3 class="h2">Tools Supporting the Skill</h3>
                            <p>
                            </p>
                            <h3 class="h2">Skill Self-Assessment</h3>
                            <p>
                            </p>
                            <h3 class="h2">References</h3>
                            <p>
                                Here are a list of references: 
                            <li>SWEBOK3</li>
                            </p>
                        </article>
                    </div>
                </div>
            </div>
            @include('skills.partials.sidebar', ['skill' => $skill])
        </div>
    </div>
</section>
@endsection