<script>
  export default{
    name: "App",
    data(){
      return{
        greet: "Hello",
        name: "Ravindra Kumar",
        channel: "<b>CodingTure</b>",
        headingId: "heading",
        isDisabled: false,
        status: "success info",
        isPromoted: true,
        isSoldOut: true,
        fontSize: '40px',
        headerStyles:{
          color:'green',
          padding: '20px'
        },
        baseStyle:{
          fontSize:'30px',
          marginTop: '10px'
        },
        display:true,
        num:'s',
        names:['Ram', 'shyam', "Sita", "Radha"],
        fullName:[
          {"first": "Sita", "last":"Ram"},
          {"first": "Radha", "last":"Shyam"},
        ],
        actors:[
          {
            name: "Hero1",
            movies:['movi1', 'movi2']
          },
          {
            name: "Hero11",
            movies:['movi11', 'movi12']
          },
          {
            name: "Hero21",
            movies:['movi21', 'movi22']
          }
        ],
        info: {
          name:"ram",
          channel:"CodingTure",
          course:"PHP"
        }


      }
    }
  }
</script>

<template>
  <div>{{greet}} {{name}}</div>
  <br>
  <div v-text="channel"> </div>
  <br>
  <div v-html="channel"> </div>
  <br>
  <div v-bind:id="headingId"> Bind </div>
  <br>
  <button v-bind:disabled="isDisabled">Button</button>
  <br>
  <p v-bind:class="status">Button</p>
  <h2 v-bind:class="isPromoted && 'promot-this'">Promotoins</h2>
  <h3 v-bind:class="isSoldOut ? 'danger' : 'success' ">Movies</h3>
  <h3 v-bind:class="[isSoldOut ? 'danger' : 'success',  isPromoted && 'promot-this']">Array Movies</h3>
  <h3 v-bind:class="{
    promote : isPromoted,
    new : isSoldOut ,
    old : !isSoldOut
  }">Object Videos</h3>
  <br>
  <h1 v-bind:style="{color:'red', fontSize: fontSize}"> Object Style Binding</h1>
  <h2 v-bind:style="headerStyles">Style Binding new</h2>
  <h3 v-bind:style="[baseStyle, headerStyles]">Array Style Binding</h3>
  <p>Or</p>
  <h3 :style="[baseStyle, headerStyles]">Without v-bind Binding</h3>

  <h1 v-if="display">If Condition</h1>
  <h1 v-else>else Condition</h1>
  <h1 v-if="num==0">Number is Zero</h1>
  <h1 v-else-if="num>0">Number is Greater than Zero</h1>
  <h1 v-else-if="num<0">Number is Less than Zero</h1>
  <h1 v-else>Not a Number</h1>

  <div v-if="display">
    <p>Hello</p>
    <p>hi</p>
  </div>
  <p>Or</p>
  <template v-if="display">
    <p>Hello</p>
    <p>hi</p>
  </template>
  <hr>
  <h2 v-show="display">v-show example</h2>

  <h2 v-for="(name, index) in names" :key="name">{{index}}-{{name}}</h2>
  <h2 v-for="name in fullName" :key="name.first">{{name.first}}-{{name.last}}</h2>
  
  <div v-for="actor in actors" :key="actor.name">
    <h2>{{actor.name}}</h2>
    <h3 v-for="movi in actor.movies" :key="movi">{{movi}}</h3>
  </div>

  <h2 v-for="(value, key, index) in info" :key="value">{{index}}-{{key}}-{{value}}</h2>
  
</template>

<style>
@import './assets/base.css';

.danger{
  color:red;
}

.success{
  color:green;
}

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
