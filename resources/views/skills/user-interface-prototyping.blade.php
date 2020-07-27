@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex">
                    @include('skills.partials.breadcrumbs', ['skill' => $skill])
                </div>
                <h2 class="h1 mt-4">User Interface Prototyping</h2>
                <div class="lead">Consectetur adipiscing elit. Phasellus feugiat elit.</div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-10">
                        <article class="article">
                            <h2 class="h1 mt-4">USER INTERFACE PROTOTYPE</h2>

                <h3 class="h2">Name of Skill</h3>    
                
                <p>

                USER INTERFACE PROTOTYPE

                </p>
               
               <h3 class="h2">Classification of Skill :</h3>  
               
               <p>
               
                This skill can be classified as knowledge based skill because the skill is based on the knowledge of specific subject, procedures and information necessary to perform particular tasks.
                Which can also be acquired with the help of education, training or job experience.
                </p>

              <h3>Prerequisites for User Inteface Prototyping</h3> 
              <p>

                1. Understanding of Software Requirements.<br>

                2. Understanding of Use case Diagrams. <br>

                3. Creative Thinking and Attention to the details by understanding the underlying bussiness.<br>

                4. Well understanding on the UI design principles <br>

                5. Knowledge on use of prototyping tools. <br>
                
                
                </p>

                 <h3>Related Software Engineering Areas</h3> 
               
                <p>
                
                1.  Software Testing - Usability Testing <br>

                2.  Software Design  - User Inteface Designing <br>

                3.  Software Engineering Process - As part of Software Design Lifecycle <br>

                </p>

              <h3>Rationale for Skill</h3>   
               
                 <p>
                 
                For any software development there is need of prototypes in order to know the design, look and end product of the software system in case of software development, elicitation of requirements, use case diagrams and UML model diagrams helps to have an understanding of the system for all the stakeholders involved in the software design lifecycle.<br>

                But in case of web development along with the backend functionalities another important criteria is user interface using which a client or an customer interacts with the system based on how simple and user friendly is the interface it could attract more no of customers. So in order to know the design of user interface prior to the development of the final model a prototype is made to check the look and feel of the website which is helpful for the stakeholders to approve the design before the implementation which decreases both the cost and effort that are invested into development of final model.

               

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
