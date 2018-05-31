<template>
  <v-bottom-nav :value="true" :active.sync="e1" absolute color="transparent">
    <v-btn flat color="teal" value="recent">
      <span>Recent</span>
      <v-icon>history</v-icon>
    </v-btn>
    <v-btn flat color="teal" value="favorites">
      <span>Favorites</span>
      <v-icon>favorite</v-icon>
    </v-btn>
    <v-btn flat color="teal" value="nearby">
      <span>Nearby</span>
      <v-icon>place</v-icon>
    </v-btn>
  </v-bottom-nav>
</template>

<script>
  export default {
    data () {
      return {
        e1: 'recent'
      }
    }
  }
</script>
