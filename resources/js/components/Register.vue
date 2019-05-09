<template>
   <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <div class="account-type">
                  <label for="idRegisterCan">
                    <input id="idRegisterCan" type="radio" v-model="reg.user_type" value="2">
                    <span>Candidate</span>
                  </label>
                  <label for="idRegisterEmp">
                    <input id="idRegisterEmp" type="radio" v-model="reg.user_type" value="1">
                    <span>Employer</span>
                  </label>
                  <span id="error_user_type">{{error.user_type}}</span>
                </div>
                <form action="#" @submit="registerNow">
                  <div class="form-group">
                    <input type="text" v-model="reg.name" name="name" placeholder="Full Name" class="form-control">
                    <span id="error_name">{{error.name}}</span>
                  </div>
                  <div class="form-group">
                    <input type="text" v-model="reg.mobile" name="mobile" placeholder="Mobile No" class="form-control">
                    <span id="error_mobile">{{error.mobile}}</span>
                  </div>
                  <div class="form-group">
                    <input type="email" v-model="reg.email" name="email" placeholder="Email Address" class="form-control">
                    <span id="error_email">{{error.email}}</span>
                  </div>
                  <div class="form-group">
                    <input type="password" v-model="reg.password" name="password" placeholder="Password" class="form-control">
                    <span id="error_password">{{error.password}}</span>
                  </div>
                  <div class="more-option terms">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" v-model="reg.is_accept" id="defaultCheck2">
                      <label class="form-check-label" for="defaultCheck2">
                        I accept the <a href="#">terms & conditions</a>
                      </label>
                      <span id="error_is_accept">{{error.is_accept}}</span>
                    </div>
                  </div>
                  <button type="submit" id="register_btn" class="button primary-bg btn-block">Register</button>
                </form>
                <div class="shortcut-login">                
                  <p>Already have an account? <a href="#">Login</a></p>
                </div>
              </div>
            </div>
</template>


    <script>
    export default {
      data(){
        return{
          error:{
            name:'',
            email:'',
            mobile:'',
            password:'',
            is_accept:'',
            user_type:'',
          },
          reg : {
            name:'',
            email:'',
            mobile:'',
            password:'',
            is_accept:false,
            user_type:'',
          }
        }
      },
      methods:{
        registerNow(e){
         
          let is_valid = true;

          if(this.reg.user_type ==""){
          this.error.user_type = "Name field is required!";
          }else{
            this.error.user_type ="";
          } 

          if(this.reg.name ==""){
          this.error.name = "Name field is required!";
          }else{
            this.error.name ="";
          } 

          if(this.reg.email ==""){
            this.error.email = "Email field is required!";
          }else{
            this.error.email ="";
          }

          if(this.reg.mobile ==""){
            this.error.mobile = "Mobile No field is required!";
          }else{
            this.error.mobile ="";
          } 

          if(this.reg.password ==""){
              this.error.password = "Password field is required!";
          }else{
            this.error.password ="";
          } 
          if(this.reg.is_accept == false){
            is_valid = false;
            this.error.is_accept ='Please accept the terms and condition !.';
          }else{
            this.error.is_accept = "";
          }


          if(is_valid == true){
            $('#register_btn').html('<i class="fa fa-spinner fa-spin"></i>').css('disabled',true);

            axios.post(window.location.origin+'/registerNow', this.reg)
            .then(function (response) {
                $('#register_btn').text('Register').css('disabled',false);
                let errors  = response.data.errors;
                if(response.data.success === false){
                    $.each(errors,function(key,value){
                        $('#error_'+key).text(value[0]);
                    });
                }else{
                  this.reg = {
                     name:'',
                    email:'',
                    mobile:'',
                    password:'',
                    is_accept:false,
                    user_type:'',
                  };
                  $.each(this.reg,function(key,value){
                        $('#error_'+key).text('');
                  });
                  console.log(response);
                }
                
              
            })
            .catch(function (error) {
              $('#register_btn').text('Register').css('disabled',false);
                console.log(error);
            });
          }
          return e.preventDefault();
        }
      }
    }
    </script>