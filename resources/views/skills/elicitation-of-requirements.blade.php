@extends('layouts.app')

@section('content')
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex">
                    @include('skills.partials.breadcrumbs', ['skill' => $skill])
                </div>
                <h2 class="h1 mt-4">Elicitation of Requirements</h2>
				<img src="https://www.newparts.ro/myuploads/image/dezvoltare/intrebare-cover.jpg" width="150" height="150" right="500"> 
                <div class="lead">Requirements elicitation explores the problem world. It is one of the most important and sensitive practices in software engineering projects as it deals with the origins of a project. 
								  Requirements elicitation is composed of information gathering from users, stakeholders, and other technical and non-technical groups. 
								  <br> To practice elicitation effectively, this includes performing interviews, distributing various questionnaires, collecting user observations, conducting workshops, group brainstorming, creating use cases, role playing and prototyping among other techniques.
								  Usually, since different issues arise overtime within the Software Development Life Cycle (SDLC), the elicitation process becomes more complicated with the changing stakeholder requirements. </div>
                <hr class="my-md-4 my-lg-5">
                <div class="row">
                    <div class="col-xl-11">
                        <article class="article">
                            <h3 class="h2">Classification of Skill</h3>
                            <p>
                                Requirement elicitation is a technical skill. Mainly it is involved in undergoing research to anaylze and study the system-as-is.
                                In addition to that, elicitation of requirements helps in identifying objectives on the system-to-be. These objectives include technical constraints.  
                            </p>
                            <h3 class="h2">Prerequisites for Skill</h3>
                            <p>
                                The requirement elicitation is one of the first studies done to a project. As an initial step, understanding the domain of the project and identifying the system stakeholders are crucial. 
                                Prerequisites for this skill include excellent communication skills to interact with the stakeholders for interviews, run background studies of the system-to-be, and gathering and collecting useful data through questionnaires and surveys.								
                            </p>
                            <h3 class="h2">Related Software Engineering Area(s)</h3>
                            <p>
                                Requirement elicitation is one of the activities that makes up Requirement engineering.
                                Elicitation falls in the RE lifecycle process.
                            </p>
                            <h3 class="h2">Rationale for Skill</h3>
                            <p>
                                Elicitation of requirement is a crucial skill since it helps in identifying the main goals and objectives of the project. 
                                This skill was chosen because it extracts useful requirements and helps software engineers to select the correct elicitation techniques for identifying the right stakeholders and guides the way for the right interatcion. 
                                Organizational and technical constraints for the system-to-be is also clarified in the elicitation phase. Since there will be continous discussions with the stakeholders, alternative solutions and objectives are going to be suggested to satisfy the completion of the project. 
                            </p>
                            <h3 class="h2">Roles for Skill</h3>
                            <p>
                                Elicitation plays an essential role in requirement engineering and in the assurance of project's success in the highest quality possible, without digression from the main functional and non-functional requirements. 
                                Some of the roles elicitation plays, is brainstorming for new ideas for the system-to-be. 
                                Both, the Stakeholders and the eliciting project development team in continous discussions and negotiations, and there is a vast amount of information flowing. 
                            </p>
                            <h3 class="h2">Work Related to Skill (Related Activities and Artifacts)</h3>
                            <p>
                                Throughtout school projects, there is always a need to elicite the requirements from the professor and gather as much information as possible to work on the project goals.
                                </p
                            <h3 class="h2">Real-World Example/Scenario of Skill (Text, Graphic, Audio, Video)</h3>
                            <p> 
                                Elicitation is being practiced on small and large scale projects. 
                                One Artefact-driven elicitation technique that could be used would be Card sorts and repository grids.
                                A hypothetical example would be having an open dialogue to discuss a project similar to a streaming website, such as YouTube. 
                                The goal is to acquire information about concepts that were initially elicited. 
                                The round of discussions would be as follows:
                            <li> Iteration 1: "A Website for streaming Videos created by Users."</li>
                            <li> Iteration 2: "Different types of users exist. Some are contributers, and some are only watchers"</li>
                            <li> Iteration 3: "The contributers would be called creators. And as a creator, they are allowed to upload videos 24/7."</li>
                            </p>
                            <h3 class="h2">Role of Academia or Industry in Cultivating the Skill</h3>
                            <p>
                                Research papers and academic books nurture the idea of elicitation. Currently, there is a focus on the types of interviews, and that Structured interviews collect more information than unstructured.
                            </p>
                            <h3 class="h2">Tools Supporting the Skill</h3>
                            <p>
                                Elicitation techniques have complementary strengths and limitations. 
                                There are artefact-driven and stakeholder-driven elicitation techniques. In addition to that, for a full and adequate coverage, techniques can be combined to have an artefact-driven + stakeholder-driven.
                                Artefact-driven can be composed of:
                            <li> Stakeholder analysis </li>
                            <li> Background studies </li>
                            <li> Card sorts and repository grids </li>
                            <li> Scanarios and Storyboards </li>
                            <li> Prototypes and mockups </li>
                            <br>
                            On the other side, Stakeholder driven techniques can be:
                            <li> Interviews </li>
                            <li> Group sessions </li>
                            </p>
                            <h3 class="h2">Skill Self-Assessment</h3>
                            <p>
                                7/10
                                My knowledge in this area is only based on the readings I have done on this topic and not on practical real world experince. This is the main reason why I would give myself this rating.
                                Applying the skill in real world complex software projects, you would touch more corners and understand additional dimensions. 
                                This rating is based on my understanding, after acknowledging and realizing how important it is to elicite and the massive input it gives to steer a project in the right path.
                                Elicitation requirements sheds the light and gives that emphasis on how important communication is and agreement is for the success of a project. 
                            </p>
                            <h3 class="h2">References</h3>
                            <p>
                                Here are a list of references: 
                            <li>Pierre Bourque, Richard E. Fairley (2014). Swebok V3.0. Guide to the SOftware Engineering Body of Knowledge</li>
                            <li>Axel van Lamsweerde (2009). Requirements Engineering: From System Goals to UML Models to Software Specifications</li>
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