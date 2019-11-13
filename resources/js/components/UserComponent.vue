<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div><input type="text" v-model="name"></div>
                        <div><input type="text" v-model="email"></div>
                        <div><input type="text" v-model="password"></div>
                        <button type="submit" @click="soushin">soushin</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/axios/api/userlist').then(response => console.log(response));
        }

        ,
        data() {
            return {
                name: "",
                email: "",
                password: ""
            }
        },
        methods:{
            soushin(){
                let data = {
                    name: this.name ,
                    email: this.email ,
                    password: this.password
                };

                axios.post('/axios/api/adduser', data)
                 .then(res => {console.log('success', res.data)})
                 .catch(e => {console.log('validation error', e.response.data.errors)});
            }
        }
    }
</script>
