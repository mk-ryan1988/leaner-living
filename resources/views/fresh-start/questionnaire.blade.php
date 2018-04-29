@extends('layouts.auth')

@component('alert', ['type' => 'success'])
    @slot('title')
        Payment Accepted
    @endslot
    Insert Text here!
@endcomponent

@section('content')

<div class="gradient" style="height: 400px; margin-top: -64px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 200px; width: auto;">
      </div>
      <div class="col-12 col-lg-8">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div>
    </div>
  </div>
</div>
<div id="signUp-stepper" class="row">
  <div class="col-12">
    <ul class="stepper horizontal w-100 white" id="horizontal" style="margin: 0px!important;">
      <li class="step done">
        <div data-step-label="" class="step-title waves-effect waves-dark"> <a href="/PAR-Q">PAR-Q</a></div>
      </li>
      <li class="step done">
        <div class="step-title waves-effect waves-dark"><a href="">Register / Payment</a></div>
      </li>
      <li class="step active">
        <div class="step-title waves-effect waves-dark"><a href="">Questionnaire</a></div>
      </li>
    </ul>
  </div>
</div>
<div class="spacer"></div>
<div class="row align-items-center justify-content-center">
   <form action="/api/questionnaire" method="post" id=questionnaire-form class="col-12 col-md-8">
    {{--1. Lifestyle section --}}
    <div class="col-8 col-md-4 leaner-green">
        <header>
          <h4 class="white-text">Lifestyle</h4>
        </header>
    </div>
    <div class="padding z-depth-1 white">
      <div class="row">
        <div class="input-field col">
          <input id="s1q1" type="text" name="s1q1" class="validate">
          <label for="s1q1">What is your current occupation?</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>What are your average weekly working hours?</label>
        </div>
        <div class="radio-group col-12">
          <p>
            <label>
              <input class="with-gap" name="s1q2" value="option1" type="radio" />
              <span>0-10</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q2" value="option2" type="radio" />
              <span>11-20</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q2" value="option3" type="radio" />
              <span>21-30</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q2" value="option4" type="radio" />
              <span>31-40</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q2" value="option5" type="radio" />
              <span>40+</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>Which of the following best describes your occupation?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s1q3" type="radio" value="option1"/>
              <span>Very inactive (predominantly desk based) </span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q3" type="radio" value="option2"/>
              <span>Moderately Active (A combination of desk based and non physically challenging)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q3" type="radio" value="option3"/>
              <span>Highly Active (rarely stationary but not physically challenging)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q3" type="radio" value="option4"/>
              <span>Physically Active (predominantly physically challenging work) </span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>When not working what would you rate your activity level on a scale of 1-10 (1 very inactive 10 highly active)</label>
        </div>
        <div class="col-12">
          <p class="range-field">
           <input type="range" name="s1q4" id="s1q4" start="5" min="0" max="10" />
         </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>On average how many hours will you sleep a night?</label>
        </div>
        <div class="radio-group col-12">
          <p>
            <label>
              <input class="with-gap" name="s1q5" type="radio" value="option1"/>
              <span>0-4 Hrs</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q5" type="radio" value="option2"/>
              <span>5 Hrs</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q5" type="radio" value="option3"/>
              <span>6 Hrs</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q5" type="radio" value="option4"/>
              <span>7 Hrs</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q5" type="radio" value="option5"/>
              <span>8 Hrs</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q5" type="radio" value="option6"/>
              <span>9 Hrs</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>How often do you socialise with family/friends?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s1q6" type="radio" value="option1"/>
              <span>Once per month</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q6" type="radio" value="option2"/>
              <span>Every few days</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q6" type="radio" value="option3"/>
              <span>Every other week</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q6" type="radio" value="option4"/>
              <span>Once per week</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
            <label>How often do you eat away from home for example food that you have not prepared yourself, business lunches or meals out with friends? </label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s1q7" type="radio" value="option1"/>
              <span>Never or rarely</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q7" type="radio" value="option2"/>
              <span>Once or twice per week</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q7" type="radio" value="option3"/>
              <span>Three to four times per week</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q7" type="radio" value="option4"/>
              <span>Daily</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <label>Smoking habits</label>
          <p>
            <label>
              <input class="with-gap" name="s1q8" type="radio" value="option1"/>
              <span>I have never smoked</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q8" type="radio" value="option2"/>
              <span>I smoke 1-10 per week</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q8" type="radio" value="option3"/>
              <span>I smoke 11-20 per week</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q8" type="radio" value="option4"/>
              <span>I smoke 21-30 per week</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q8" type="radio" value="option5"/>
              <span>I smoke 31-50 per week</span>
            </label>
          </p>
        </div>
        <div class="col-12 col-md-6">
          <label>Alcohol Consumption</label>
          <p>
            <label>
              <input class="with-gap" name="s1q9" type="radio" value="option1"/>
              <span>I never or rarely drink (2 glasses a week)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q9" type="radio" value="option2"/>
              <span>I drink at least twice per week (4+ a week)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q9" type="radio" value="option3"/>
              <span>I drink multiple times per week (6+ a week)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q9" type="radio" value="option4"/>
              <span>I drink every night (10+a week)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s1q9" type="radio" value="option5"/>
              <span>I occasionally binge drink</span>
            </label>
          </p>
        </div>
      </div>
    </div>

    <div class="spacer"></div>

    {{--2. Excercise section --}}
    <div class="col-8 col-md-4 leaner-green">
        <header>
          <h4 class="white-text">Excercise</h4>
        </header>
    </div>
    <div class="padding z-depth-1 white">
      <div class="row">
        <div class="col-12">
          <label>Are you currently participating in a regular exercise program at this time?</label>
        </div>
        <div class="radio-group base col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q1" type="radio" value="option1"/>
              <span>Yes</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q1" type="radio" value="option2"/>
              <span>No</span>
            </label>
          </p>
        </div>
        <div class="col-12">
          <label>If yes please state how many times a week are you completing this program?</label>
        </div>
        <div class="radio-group base col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q2" type="radio" value="option1"/>
              <span>1</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q2" type="radio" value="option2"/>
              <span>2</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q2" type="radio" value="option3"/>
              <span>3</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q2" type="radio" value="option4"/>
              <span>4</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q2" type="radio" value="option5"/>
              <span>5</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>What does your current exercise program consist of?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q3" type="radio" value="option1"/>
              <span>Resistance training</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q3" type="radio" value="option2"/>
              <span>Cardio (running, cycling etc.)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q3" type="radio" value="option3"/>
              <span>Exercise class (Zumba, Body Combat, Body Attack etc.)</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q3" type="radio" value="option4"/>
              <span>Yoga or Pilates</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q3" type="radio" value="option5"/>
              <span>Swimming</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q3" type="radio" value="option6"/>
              <span>Other (please explain below)</span>
            </label>
          </p>
          <input placeholder="Please explain here" type="text" name="s2q3more" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>What would you consider your current level of exercise understanding? (e.g. how to squat, deadlift, bench press)</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q4" type="radio" value="option1"/>
              <span>Complete beginner</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q4" type="radio" value="option2"/>
              <span>Know the basics</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q4" type="radio" value="option3"/>
              <span>Competent</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q4" type="radio" value="option4"/>
              <span>I know my stuff</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>What would you consider your present attitude towards exercise?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q5" type="radio" value="option1"/>
              <span>Can’t stand the thought of it.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q5" type="radio" value="option2"/>
              <span>I’ll do it because I know I should, but I don’t enjoy it.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q5" type="radio" value="option3"/>
              <span>I don’t mind exercise, and I know it’s beneficial.	</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q5" type="radio" value="option4"/>
              <span>I am motivated to exercise</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>How do you feel about your present physical condition in terms of the way you look?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q6" type="radio" value="option1"/>
              <span>I would like to completely change my body.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q6" type="radio" value="option2"/>
              <span>There are many things about my body that I am not comfortable with.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q6" type="radio" value="option3"/>
              <span>For the most part I look OK, but I do feel uncomfortable with a few things about my appearance.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q6" type="radio" value="option4"/>
              <span>I am proud of my body and I am comfortable in any manner of dress in appropriate situations.</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>How do you feel about yourself and your abilities?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q7" type="radio" value="option1"/>
              <span>I am not comfortable with the way I look, feel, or perform in most situations.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q7" type="radio" value="option2"/>
              <span>I would love to change many things about myself although I am proud of who I am.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q7" type="radio" value="option3"/>
              <span>I’m very good at the things I must do, take pride in many of my achievements, and am quite able to handle myself in most situations.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q7" type="radio" value="option4"/>
              <span>I have great strength, ability and pride.</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>How do you feel about your current physical condition (current fitness)?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q8" type="radio" value="option1"/>
              <span>I feel as if I’m in very poor condition and uncomfortable when faced with a physical challenge.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q8" type="radio" value="option2"/>
              <span>I am not comfortable with my performance abilities; However, I am comfortable with training to improve.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q8" type="radio" value="option3"/>
              <span>I feel pretty good about my ability to perform physically although I would like to improve.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q8" type="radio" value="option4"/>
              <span>I have exceptional physical abilities and enjoy being called upon to display them.</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>When you begin a program or set a goal, how likely are you to follow through to its fruition?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q9" type="radio" value="option1"/>
              <span>I’ve never been real good at following things through to the end.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q9" type="radio" value="option2"/>
              <span>With the right motivation and some evidence of results I think I might stick to it.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q9" type="radio" value="option3"/>
              <span>I have the patience and ability to commit to a program and will give it a chance in order to assess its value.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q9" type="radio" value="option4"/>
              <span>Once I set a goal, there’s no stopping me.</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>When participating in the Fresh Start please state how many times a week you will be available to exercise.</label>
        </div>
        <div class="radio-group col-12">
          <p>
            <label>
              <input class="with-gap" name="s2q10" type="radio" value="option1"/>
              <span>1</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q10" type="radio" value="option2"/>
              <span>2</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q10" type="radio" value="option3"/>
              <span>3</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s2q10" type="radio" value="option4"/>
              <span>4</span>
            </label>
          </p>
        </div>
      </div>
    </div>

    <div class="spacer"></div>

    {{-- Nutritional section --}}
    <div class="col-8 col-md-4 leaner-green">
        <header>
          <h4 class="white-text">Nutrition</h4>
        </header>
    </div>
    <div class="padding z-depth-1 white">
      <div class="row">
        <div class="col-12">
          <label>What would you consider your current level of nutritional understanding?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s3q1" type="radio" value="option1"/>
              <span>Complete beginner </span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q1" type="radio" value="option2"/>
              <span>Know the basics</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q1" type="radio" value="option3"/>
              <span>Competent</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q1" type="radio" value="option4"/>
              <span>I know my stuff</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>What do you find if any are your biggest obstacles nutritionally?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s3q2" type="radio" value="option1"/>
              <span>Complete lack of understanding</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q2" type="radio" value="option2"/>
              <span>Lack of variety in food selection, leading to boredom</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q2" type="radio" value="option3"/>
              <span>My cooking ability</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q2" type="radio" value="option4"/>
              <span>Other (please explain below)</span>
            </label>
          </p>
          <input placeholder="Please explain here" type="text" name="s3q2more" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>What do you find if any are your biggest obstacles nutritionally?</label>
        </div>
        <div class="radio-group base col-12">
          <p>
            <label>
              <input class="with-gap" name="s3q3" type="radio" value="option1"/>
              <span>Yes</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s3q3" type="radio" value="option2"/>
              <span>No</span>
            </label>
          </p>
        </div>
        <div class="col-12">
          <input placeholder="If you please provide some details here" type="text" name="s3q3more" class="textarea">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>If you currently track your calories and or macros what are your daily targets?</label>
        </div>
        <div class="col-12 col-md-3">
          <input placeholder="Protein (grams)" type="text" name="s3q4a" class="textarea">
        </div>
        <div class="col-12 col-md-3">
          <input placeholder="Fats (grams)" type="text" name="s3q4b" class="textarea">
        </div>
        <div class="col-12 col-md-3">
          <input placeholder="Carbs (grams)" type="text" name="s3q4c" class="textarea">
        </div>
        <div class="col-12 col-md-3">
          <input placeholder="Total Calories" type="text" name="s3q4d" class="textarea">
        </div>
      </div>
    </div>

    <div class="spacer"></div>

    {{-- Goals section --}}
    <div class="col-8 col-md-4 leaner-green">
        <header>
          <h4 class="white-text">Goal Setting</h4>
        </header>
    </div>
    <div class="padding z-depth-1 white">
      <div class="row">
        <div class="col-12">
            <label>Which of the below best suits your current nutritional and training goals?</label>
        </div>
        <div class="col-12">
          <p>
            <label>
              <input class="with-gap" name="s4q1" type="radio" value="option1"/>
              <span>Weight Loss</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s4q1" type="radio" value="option2"/>
              <span>Improve nutritional understanding</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s4q1" type="radio" value="option3"/>
              <span>Improve sports performance</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s4q1" type="radio" value="option4"/>
              <span>Improve exercise understanding</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s4q1" type="radio" value="option5"/>
              <span>Other (please state below)</span>
            </label>
          </p>
          <input placeholder="Please explain here" type="text" name="s4q1more" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col">
          <input id="s4q2" name="s4q2" type="text" class="validate">
          <label for="s4q2">What are the reasons and timeframes for your goals?</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label>Have you tried to achieve these goals previously?</label>
        </div>
        <div class="radio-group base col-12">
          <p>
            <label>
              <input class="with-gap" name="s4q3" type="radio" value="option1"/>
              <span>Yes</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s4q3" type="radio" value="option2"/>
              <span>No</span>
            </label>
          </p>
        </div>
        <div class="col-12">
          <label>If yes did you succeed?</label>
        </div>
        <div class="radio-group base col-12">
          <p>
            <label>
              <input class="with-gap" name="s4q4" type="radio" value="option1"/>
              <span>Yes</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="s4q4" type="radio" value="option2"/>
              <span>No</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col">
          <input id="s4q5" name="s4g5" type="text" class="validate">
          <label for="s4q5">What are the reasons you feel you succeeded or failed trying to achieve these goals?</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" >Submit
          <i class="material-icons right">send</i>
        </button>
   </form>
 </div>



@endsection
{{-- {{ dd(session()->has('success'))}} --}}

@if(session()->has('success'))

@endif

@section('scripts')
  {{-- <script type="text/javascript">
    $(document).ready(function(){
      var elem = document.querySelector('.modal');
      var instance = M.Modal.getInstance(elem);
      instance.open();
    });
  </script> --}}
@endsection
