

<template>
 
  <h2>{{2+3+4}}</h2>
  <h2>Add Method {{add(3,5,7)}}</h2>
  <h2>Multiplier Method {{mul(baseValue, $event)}}</h2>
  <div>
    <h2>{{name}}</h2>
    <button v-on:click="name='Ravindra Maurya'">Change Name</button>
    <button v-on:mouseover="name='Ravindra Kumar'">Change Name</button>
  </div>

  <div>
    <h2>{{counter}}</h2>
    <button v-on:click="counter += 1">Increment Counter</button>
    <button v-on:click="counter -= 1">Decerement Counter</button>

  </div>
  <br>
  <div>
    <h2>{{counter1}}</h2>
    <button v-on:click="changeCounter(1, $event), console_log($event)">Increment Counter</button>
    <button v-on:click="changeCounter(5)">Increment Counter 5</button>
    <button v-on:click="changeCounter(-1)">Decerement Counter</button>
    <button v-on:click="changeCounter(-5)">Decerement Counter 5</button>

  </div>
  <br>
  <h2> Without v-on: </h2>
  <div>
    <h2>{{counter1}}</h2>
    <button @click="changeCounter(1)">Increment Counter</button>
    <button @click="changeCounter(5)">Increment Counter 5</button>
    <button @click="changeCounter(-1)">Decerement Counter</button>
    <button @click="changeCounter(-5)">Decerement Counter 5</button>

  </div>
</template>
<script>
  export default{
    name:"App",
    data(){
      return{
        name:'Ravindra',
        multiplier: 10,
        baseValue:2,
        counter:1,
        counter1:1,
      }
    },
    methods:{
      add(a,b,c){
        return a+b+c;
      },
      mul(num, event){
        // console.log("Event", event);
        return num*this.multiplier;
      },
      changeCounter(val, event){
        console.log("Event11", event);
        return this.counter1 += val;
      },
      console_log(event){
        console.log(event)
      }
    }
  }
</script>

<style>
@import './assets/base.css';

#app {
  max-width: 1280px;
  margin: 0 auto;
  padding: 2rem;

  font-weight: normal;
}

header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

a,
.green {
  text-decoration: none;
  color: hsla(160, 100%, 37%, 1);
  transition: 0.4s;
}

@media (hover: hover) {
  a:hover {
    background-color: hsla(160, 100%, 37%, 0.2);
  }
}

@media (min-width: 1024px) {
  body {
    display: flex;
    place-items: center;
  }

  #app {
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 0 2rem;
  }

  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  .logo {
    margin: 0 2rem 0 0;
  }
}
</style>
