<template>
  <div class="">
    <div id="modal1" class="modal center-align" style="width: auto!important;">
      <div class="modal-content">
        <i class="material-icons medium circle amber-text text-darken-4">error_outline</i>
        <h4>Thank you for completing the PAR-Q!</h4>
        <p>
          Before we commence your fresh start we would like to further discuss some of your answers.
        </p>
        <p>
          We will email you shortly but alternately if you would like to talk to use feel free to message us on facebook.
        </p>
      </div>
      <div class="modal-footer right-align" >
        <a href="#!" class="modal-action modal-close waves-effect waves-dark btn-flat">dismiss</a>
        <a href="https://www.facebook.com/LeanerLiving2016/" target="_blank" class="modal-action waves-effect waves-dark btn blue darken-4 ">Our Facebook page</a>
      </div>
    </div>

    <div class="row align-items-start justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 padding">
        <div class="spacerX2"></div>
        <h4>Physical Activity Readiness Questionnaire (PAR-Q)</h4>
        <p>
          PAR-Q is designed to help you help yourself.  Many health benefits are associated with regular exercise, and the completion of PAR-Q is a sensible first step to take if you are planning to increase the amount of physical activity in your life.
        </p>
        <p>
          For most people, physical activity should not pose any problems or hazard. PAR-Q has been designed to identify the small number of adults for whom physical activity might be inappropriate or those who should have medical advice concerning the type of activity most suitable for them.
        </p>
        <p>
          Common sense is your best guide in answering these few questions.  Please read the carefully and check <strong>YES</strong> or <strong>NO</strong> opposite the question if it applies to you.  If yes, please explain.
        </p>
        <form @submit.prevent="submitForm" @keydown="form.onKeydown($event)" method="post" id="parQ-form">
          <div class="row">
            <div class="col col-12 input-field input cell">
              <input v-model="form.name" placeholder="Joe Bloggs" type="text" name="name"
                class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
              <has-error class="red-text text-lighten-1" :form="form" field="name"></has-error>
              <label for="name">Full Name</label>
            </div>
            <div class="w-100"></div>
            <div class="col col-12 input-field input cell">
              <input v-model="form.email" placeholder="Please enter valid email address" type="email" name="email"
                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
              <has-error class="red-text text-lighten-1" :form="form" field="email"></has-error>
              <label for="email">Email Address</label>
            </div>
            <div class="w-100"></div>
            <div class="col col-12 col-md-6 input-field input cell">
              <input v-model="form.dob" placeholder="DD/MM/YYY" type="text" name="dob"
              class="form-control" :class="{ 'is-invalid': form.errors.has('dob') }">
              <has-error class="red-text text-lighten-1" :form="form" field="dob"></has-error>
            </div>
            <div class="input-field col col-12 col-md-6">
              <select v-model="form.gender">
                <option class="grey-text" value="" disabled selected>select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <has-error class="red-text text-lighten-1" :form="form" field="gender"></has-error>
              <label for="gender">Gender</label>
            </div>
          </div>
          <div class="spacer"></div>
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
                      <input v-model="form.q1More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q1More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q1" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2. Do you frequently have pains in your heart and chest?
                      <input v-model="form.q2More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q2More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q2" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3. Do you often feel fain or have spells of severe dizziness?
                      <input v-model="form.q3More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q3More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q3" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4. Has a doctor ever said your blood pressure was too high?
                      <input v-model="form.q4More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q4More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q4" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5. Has your doctor ever told you that you have a bone or joint problem(s), such as arthritis that has been aggravated by exercise,  or might be made worse with exercise?
                      <input v-model="form.q5More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q5More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q5" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6. Is there a good physical reason, not mentioned here, why you should not follow an activity program even if you wanted to?
                      <input v-model="form.q6More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q6More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q6" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      7. Do you suffer from any problems of the lower back, i.e., chronic pain, or numbness?
                      <input v-model="form.q7More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q7More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q7" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      8. Are you currently taking any medications?
                      <input v-model="form.q8More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q8More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q8" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      9. Do you currently have a disability or a communicable disease?
                      <input v-model="form.q9More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1" :form="form" field="q9More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q9" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      10. Are you or have you been pregnant in the last 6 months?
                      <input v-model="form.q10More" placeholder="If yes, please state:" type="text" >
                      <has-error class="red-text text-lighten-1"  :form="form" field="q10More"></has-error>
                    </td>
                    <td>
                      <div class="switch">
                        <label>
                          <input v-model="form.q10" type="checkbox">
                          <span class="lever"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="spacer"></div>
          <div class="row no-gutters">
            <div class="col">
              <button :disabled="form.busy" class="btn waves-effect waves-dark leaner-green w-100" type="submit" name="action">
                Submit PAR-Q
                <i class="material-icons" style="vertical-align: middle; margin-left: 20px;">send</i>
              </button>
            </div>
          </div>
        </form>
        <transition name="rise">
          <div v-show="showSnackbar" class="showSnackbar bottom">
            <span>Form validation errors please check!</span>
            <a @click="showSnackbar = false" class="waves-effect waves-dark btn-flat">dismiss</a>
          </div>
        </transition>
        <div class="spacer"></div>

      </div>
    </div>
  </div>

</template>

<script>

import { Form, HasError, AlertError } from 'vform';

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
export default {

  data: function () {
    return {
      form: new Form({
        name: '',
        dob: '',
        gender: '',
        q1: false,
        q1More: '',
        q2: false,
        q2More: '',
        q3: false,
        q3More: '',
        q4: false,
        q4More: '',
        q5: false,
        q5More: '',
        q6: false,
        q6More: '',
        q7: false,
        q7More: '',
        q8: false,
        q8More: '',
        q9: false,
        q9More: '',
        q10: false,
        q10More: '',
      }),
      showSnackbar: false,
     }
  },
  props: [
    //
  ],
  mounted(){
    //
  },
  methods: {
    submitForm: function() {
     this.form.post('/api/parq')
       .then(response => {
         window.location = response.data.redirect;
     }).catch(e => {
         if (e.response.status == 422) {
           this.showSnackbar = true;
           var self = this;
           setTimeout(function(){
              self.showSnackbar = false;
           }, 5000);
         }else if (e.response.status == 403) {
           var elem = document.querySelector('.modal');
           var instance = M.Modal.getInstance(elem);
           instance.open();
         }
     });
    }

  }
}
</script>
