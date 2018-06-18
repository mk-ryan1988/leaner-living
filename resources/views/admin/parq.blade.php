@extends('admin.index')

@section('nested-content')

<div class="padding">
  <h4>PAR-Q answers</h4>
  <div class="row">
    <div class="col-12">

      <table>
        <thead>
          <tr >
              <th>Name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>DoB</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$parq->name}}</td>
            <td><a href="mailto:{{$parq->email}}">{{$parq->email}}</a></td>
            <td>{{$parq->gender}}</td>
            <td>{{$parq->dob}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
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
              <p>
                {{$parq->q1_more}}
              </p>
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q1) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              2. Do you frequently have pains in your heart and chest?
              <input value="{{$parq->q2_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q2) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              3. Do you often feel fain or have spells of severe dizziness?
              <input value="{{$parq->q3_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q3) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              4. Has a doctor ever said your blood pressure was too high?
              <input value="{{$parq->q4_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q4) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              5. Has your doctor ever told you that you have a bone or joint problem(s), such as arthritis that has been aggravated by exercise,  or might be made worse with exercise?
              <input value="{{$parq->q5_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q5) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              6. Is there a good physical reason, not mentioned here, why you should not follow an activity program even if you wanted to?
              <input value="{{$parq->q6_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q6) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              7. Do you suffer from any problems of the lower back, i.e., chronic pain, or numbness?
              <input value="{{$parq->q7_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q7) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              8. Are you currently taking any medications?
              <input value="{{$parq->q8_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q8) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              9. Do you currently have a disability or a communicable disease?
              <input value="{{$parq->q9_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q9) checked @endif disabled type="checkbox">
                  <span class="lever"></span>
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              10. Are you or have you been pregnant in the last 6 months?
              <input value="{{$parq->q10_more}}" disabled="disabled" placeholder="If yes, please state:" type="text" >
            </td>
            <td>
              <div class="switch">
                <label>
                  <input @if ($parq->q10) checked @endif disabled type="checkbox">
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

@endsection
