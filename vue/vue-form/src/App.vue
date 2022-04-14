<script>

export default{
    title:"App",
    data(){
        return {
          formValues: {
            name:'',
            summary:'',
            country:[],
          }
        }
    }
}
</script>

<template>
  <div>
    <pre>
      {{JSON.stringify(formValues, null, 2)}}
    </pre>
  </div>
  <form>
    <div>
      <lable for="name">Name</lable>
      <input type="text" id="name" v-model="formValues.name" />
    </div>
    <div>
      <lable for="summary">Summary</lable>
      <textarea id="summary" v-model="formValues.summary"></textarea>
    </div>
    <div>
      <lable for="country">Country</lable>
      <select id="country" v-model="formValues.country">
        <option>India</option>
        <option>USA</option>
        <option>Nepal</option>
        <option>USA</option>
      </select>
    </div>
  </form>

</template>

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
