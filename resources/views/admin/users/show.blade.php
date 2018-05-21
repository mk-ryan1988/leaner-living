@extends('admin.index')

@section('nested-content')

{{-- {{ dd($user) }} --}}
<div class="row">
  <div class="col-12">
    <ul class="tabs">
      <li class="tab col-4"><a href="#tab1">Overview</a></li>
      <li class="tab col-4"><a href="#tab2">Par-Qs</a></li>
      <li class="tab col-4"><a href="#questionnaire-answers">Questionnaire</a></li>
    </ul>
  </div>

</div>
<div class="row no-margin">
  <div style="diplay: none" id="tab1" class="col s12 padding">
    <h4>Starting Pics</h4>
    <div class="row">
      @foreach ($user->pics as $picCollection)
          <div class="col-12 col-md-4">
            <img src="{{$picCollection->pic_1}}" class="responsive-img materialboxed" alt="">
          </div>
          <div class="col-12 col-md-4">
            <img src="{{$picCollection->pic_2}}" class="responsive-img materialboxed" alt="">
          </div>
          <div class="col-12 col-md-4">
            <img src="{{$picCollection->pic_3}}" class="responsive-img materialboxed" alt="">
          </div>
          @break
      @endforeach

    </div>
    <h4>Starting Stats</h4>
    @foreach ($user->stats as $stats)
      @if ($loop->first)
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Chest</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->chest }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Waist</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->waist }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Left Arm</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->left_arm }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Right Arm</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->right_arm }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Left Leg</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->left_leg }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Right Leg</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->right_leg }}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Left Leg</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->current_weight }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="row">
              <div class="col">
                <label class="leaner-green-text">Right Leg</label>
                <p style="border-bottom: 2px dotted grey">
                  {{ $stats->target_weight }}
                </p>
              </div>
            </div>
          </div>
        </div>
        @break
      @endif
    @endforeach
  </div>
  <div style="diplay: none" id="tab2" class="col s12 padding">
    <div class="row">
      <div class="col-12">
        <table>
          <thead>
            <tr>
              <th>QUESTION</th>
              <th>NO/YES</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                1. Has your doctor ever said you have heart trouble?
                <input value="{{$user->parQ->q1_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q1) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                2. Do you frequently have pains in your heart and chest?
                <input value="{{$user->parQ->q2_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q2) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                3. Do you often feel fain or have spells of severe dizziness?
                <input value="{{$user->parQ->q3_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q3) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                4. Has a doctor ever said your blood pressure was too high?
                <input value="{{$user->parQ->q4_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q4) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                5. Has your doctor ever told you that you have a bone or joint problem(s), such as arthritis that has been aggravated by exercise,  or might be made worse with exercise?
                <input value="{{$user->parQ->q5_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q5) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                6. Is there a good physical reason, not mentioned here, why you should not follow an activity program even if you wanted to?
                <input value="{{$user->parQ->q6_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q6) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                7. Do you suffer from any problems of the lower back, i.e., chronic pain, or numbness?
                <input value="{{$user->parQ->q7_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q7) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                8. Are you currently taking any medications?
                <input value="{{$user->parQ->q8_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q8) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                9. Do you currently have a disability or a communicable disease?
                <input value="{{$user->parQ->q9_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q9) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                10. Are you or have you been pregnant in the last 6 months?
                <input value="{{$user->parQ->q10_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
              </td>
              <td>
                <div class="switch">
                  <label>
                    <input @if ($user->parQ->q10) checked @endif type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div style="diplay: none" id="questionnaire-answers" class="col s12 padding">
    <div class="row">
        @foreach ($groupedQs as $key => $questions)
          {{-- Questions section headers --}}
          <div class="col-8 col-md-4 leaner-green">
              <header>
                <h4 class="white-text">
                  @switch($key)
                      @case(1)
                          Lifestyle
                          @break

                      @case(2)
                          Excercise
                          @break
                      @case(3)
                          Nutrition
                          @break

                      @case(4)
                          Goal Setting
                          @break

                      @default

                  @endswitch
                </h4>
              </header>
          </div>
          {{-- Questions section content --}}
          <div class="padding col-12 white">
            @foreach ($questions as $key => $q)
              @switch($q->type)
                  @case('textarea')
                      @foreach ($user->questionnaireAnswers as $key => $answer)
                        @if ($answer->name == $q->name)
                          <div class="row">
                            <div class="col">
                              <label class="leaner-green-text">{{$q->title}}</label>
                              <p style="border-bottom: 2px dotted grey">
                                {{ $answer->value }}
                              </p>
                            </div>
                          </div>
                        @endif
                      @endforeach

                      @break

                  @case('radio')

                      <div class="row">
                        <div class="col-12">
                          <label class="leaner-green-text">{{$q->title}}</label>
                        </div>
                        <div class="{{$q->classes}} col-12">
                          @foreach ($q->options as $key => $option)
                            <p>
                              <label>
                                <input class="with-gap"
                                @foreach ($user->questionnaireAnswers as $key => $answer)
                                  @if ($answer->value == $option->value)checked @endif

                                @endforeach
                                name="{{$q->name}}" value="{{$option->value}}" type="radio" />
                                <span>{{$option->value}}</span>
                              </label>
                            </p>
                          @endforeach
                          @if ($q->other)
                            <p>
                              <label>
                                <input class="with-gap" name="{{$q->name}}" value="other" type="radio" />
                                <span>other (please explain below)</span>
                              </label>
                            </p>
                            @foreach ($user->questionnaireAnswers as $key => $answer)
                              @php ($name = $q->name.'other')
                              @if ($answer->name == $name)
                                <p style="border-bottom: 2px dotted grey">
                                  {{ $answer->value }}
                                </p>
                              @else
                                <p class="grey-text text-lighten-2" style="border-bottom: 2px dotted grey">
                                NULL
                                </p>
                                @break
                              @endif
                            @endforeach
                            {{-- <textarea id="{{$q->name}}other" name="{{$q->name}}other" placeholder="Please explain here" class="materialize-textarea"></textarea> --}}
                          @endif
                        </div>
                        <div class="col-12">
                          @if ($q->more)
                            @foreach ($user->questionnaireAnswers as $key => $answer)
                              @php ($name = $q->name.'more')
                              @if ($answer->name == $name)
                                <p class="no-margin" style="border-bottom: 2px dotted grey;">
                                  {{ $answer->value }}
                                </p>
                              @else
                                <p class="grey-text text-lighten-2 no-margin" style="border-bottom: 2px dotted grey">
                                NULL
                                </p>
                                @break
                              @endif
                            @endforeach
                          @endif
                        </div>
                      </div>
                      @break

                  @case('range')
                      <div class="row">
                        <div class="col-12">
                          <label class="leaner-green-text">{{$q->title}}</label>
                        </div>
                        <div class="col-12">
                          @foreach ($user->questionnaireAnswers as $key => $answer)
                            @if ($answer->name == $q->name)
                              <p class="range-field">
                               <input type="range" name="{{$q->name}}" id="{{$q->name}}" value="{{$answer->value}}" min="0" max="10" />
                             </p>
                            @endif
                          @endforeach
                        </div>
                      </div>
                      @break

                  @case('group')
                      <div class="row">
                        <div class="col-12">
                          <label class="leaner-green-text">{{$q->title}}</label>
                        </div>
                        @foreach ($q->options as $key => $option)
                          <div class="col-6 col-md-3">
                            @foreach ($user->questionnaireAnswers as $key => $answer)
                              @if ($answer->name == $option->name)
                                <p style="border-bottom: 2px dotted grey">
                                  {{ $answer->value }}
                                </p>
                              @endif
                            @endforeach
                          </div>
                        @endforeach
                      </div>
                      @break

                  @default

              @endswitch


            @endforeach
          </div>
          <div class="spacer w-100"></div>

        @endforeach

     </div>
  </div>
</div>
{{-- <div class="row">
  <div class="col">
    <h5>Manage Fresh Start Settings</h5>
  </div>
</div> --}}

@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
    M.updateTextFields();
  });
</script>
@endsection
