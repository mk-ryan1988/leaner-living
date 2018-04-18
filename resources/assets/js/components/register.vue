<template>
  <div class="container">
    <div class="row view-height align-items-center">
      <div class="col">
        <v-stepper v-model="e1">
          <v-stepper-header>
            <v-stepper-step step="1" :complete="e1 > 1">About you</v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step step="2" :complete="e1 > 2">Payment</v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step step="3">Questionnaire</v-stepper-step>
          </v-stepper-header>
          <v-stepper-items>
            <v-stepper-content step="1">
              <v-form v-model="valid">
                 <v-text-field
                   label="Full Name"
                   v-model="name"
                   :rules="nameRules"
                   :counter="10"
                   required
                 ></v-text-field>
                 <v-text-field
                   label="E-mail"
                   v-model="email"
                   :rules="emailRules"
                   required
                 ></v-text-field>
               </v-form>

              <v-btn color="primary" @click.native="e1 = 2">Continue</v-btn>
              <v-btn flat>Cancel</v-btn>
            </v-stepper-content>
            <v-stepper-content step="2">


              <v-card color="grey lighten-1" class="mb-5" height="200px"></v-card>
              <v-btn color="primary" @click.native="e1 = 3">Continue</v-btn>
              <v-btn flat>Cancel</v-btn>
            </v-stepper-content>
            <v-stepper-content step="3">
              <v-card color="grey lighten-1" class="mb-5" height="200px"></v-card>
              <v-btn color="primary" @click.native="e1 = 1">Continue</v-btn>
              <v-btn flat>Cancel</v-btn>
            </v-stepper-content>
          </v-stepper-items>
        </v-stepper>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  // name: 'StepperHorizontal'
  data: function () {
    return {
      e1: 0,
      valid: false,
    name: '',
    nameRules: [
      v => !!v || 'Name is required',
      v => v.length <= 10 || 'Name must be less than 10 characters'
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'E-mail must be valid'
    ]
    }
  },
}
</script>
