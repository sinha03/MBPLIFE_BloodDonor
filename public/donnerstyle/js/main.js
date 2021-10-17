Vue.component('manage-posts', {
  template: '#manage-template',
  data: function() {
    return {
      posts: [
        'Vue.js: The Basics',
        'Vue.js Components',
        'Server Side Rendering with Vue',
        'Vue + Firebase'
      ]
    }
  }
})

Vue.component('create-post', {
  template: '#create-template'
})

new Vue({
  el: '#app',
  data: {
    currentView: 'manage-posts'
  }
})
Vue.component('stock',{
	template: '#stock',
	data: function () {
    return {
    	band:'VUE',
	product: 'Flowers',
	selectedvary:0,

/* for list */
	names: ["beautiful","awesome","original","cute"],

/* change picture*/
    varies: [
    {variId: 2234,
     varicolor:'green',
     variimage: './assets/flower.jpg',
     varyQuentity:10 }, 

    {variId: 2235,
    varicolor:'red',
    variimage: './assets/flower1.jpg' ,
    varyQuentity:0}
      ],

    cart:0 
    	
  }
},
/* add cart*/
methods:{
addtocart:function(){
	this.cart+=1
},
  updateProduct(index){
      this.selectedvary=index
      console.log(index)
      }

},
computed:{
	/* for title*/
	title(){
		return this.band+ '' +this.product
	
},
/* for image*/
image(){
	return this.varies[this.selectedvary].variimage

},
/* for stock*/
instock(){
	return this.varies[this.selectedvary].varyQuentity
}
      
    }
  
  
})

 Vue.use(VueForm, {
	inputClasses: {
  	valid: 'form-control-success',
    invalid: 'form-control-danger'
  }
});

new Vue({
  el: '#app1',
  data: {
    formstate: {},
    model: {
      name: '',
      email: '',
      phone: '',
      department: null,
      comments: '',
      notValidated: '',
      agree: false
    }
  },
  methods: {
    fieldClassName: function (field) {
      if(!field) {
        return '';
      }
      if((field.$touched || field.$submitted) && field.$valid) {
        return 'has-success';
      }
      if((field.$touched || field.$submitted) && field.$invalid) {
        return 'has-danger';
      }
    },
    onSubmit: function() {
      console.log(this.formstate.$valid);
    }
  }
});

/*	
var app= new Vue({
el: '#productinfo',

})*/
/*
var app= new Vue({
el: '#app',
data:{
	message: 'hello ruma for learning vue.js'
}

});

/*let data ={

	message: 'Hi ruma your are learning vue.js'
};
document.querySelector('input').value=data.message;
 
 var app= new Vue({
el: '#app',
data:data
});

var app= new Vue({
el: '#list',
data:{
	names: ['ruma','sumi','nomi','juma']
},*/
/*mounted() {
alert('ready');
}
});*/