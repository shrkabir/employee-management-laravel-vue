<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employee</h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Employee
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="updateEmployee">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="" class="form-control" value="" v-model="form.first_name">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" name="middle_name" id="" class="form-control" value="" v-model="form.middle_name">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="" class="form-control" value="" v-model="form.last_name">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="" class="form-control" cols="8" rows="2" v-model="form.address"></textarea>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department_id">Department</label>
                                        <select name="department_id" id="" class="form-control" v-model="form.department_id">
                                            <option value="">Select Department</option>
                                            <option v-for="department in departments" :key="department.id" :value="department.id">{{department.name}}</option>
                                        </select>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country_id">Country</label>
                                        <select name="country_id" id="" class="form-control" v-model="form.country_id" @change="getStates">
                                            <option value="">Select Country</option>
                                            <option v-for="country in countries" :key="country.id" :value="country.id">{{country.name}}</option>
                                        </select>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state_id">State</label>
                                        <select name="state_id" id="" class="form-control" v-model="form.state_id" @click="getCities">
                                            <option>Select State</option>
                                            <option v-for="state in states" :key="state.id" :value="state.id">{{state.name}}</option>
                                        </select>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city_id">City</label>
                                        <select name="city_id" id="" class="form-control" v-model="form.city_id">
                                            <option value="">Select City</option>
                                            <option v-for="city in cities" :key="city.id" :value="city.id">{{ city.name }}</option>
                                        </select>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" name="zip_code" id="" class="form-control" value="" v-model="form.zip_code">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="birth_date">Birth Date</label>
                                        <datepicker name="birth_date" input-class="form-control" v-model="form.birth_date"></datepicker>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hired_date">Hired Date</label>
                                        <datepicker name="hired_date" input-class="form-control" v-model="form.hired_date"></datepicker>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import moment from 'moment';

    export default{
        components: {
            Datepicker
        },
        data(){
            return{
                countries: [],
                states: [],
                cities: [],
                departments: [],
                form: {
                    first_name: '',
                    last_name: '',
                    middle_name: '',
                    address: '',
                    department_id: '',
                    country_id: '',
                    state_id: '',
                    city_id: '',
                    zip_code: '',
                    birth_date: null,
                    hired_date: null
                }
            }
        },
        created(){
            this.getCountries();
            this.getDepartments();
            this.getEmployee();
        },
        methods: {
            getEmployee(){
                axios.get('/api/get-employee-data/'+ this.$route.params.id).then(res=>{
                    console.log(res);
                    this.form= res.data;
                }).catch(error=>{
                    console.log(console.error);
                });
            },
            getCountries(){
                axios.get('/api/employees/get-countries').then(res =>{
                    this.countries = res.data
                }).catch(error=>{
                    console.log(console.error);
                })
            },

            getStates(){
                axios.get('/api/employees/'+ this.form.country_id + '/get-states').then(res =>{
                    this.states= res.data
                }).catch(error=>{
                    console.log(console.error);
                })
            },

            getCities(){
                axios.get('/api/employees/'+this.form.state_id+'/get-cities').then(res=>{
                    this.cities= res.data
                }).catch(error=>{
                    console.log(console.error);
                })
            },

            getDepartments(){
                axios.get('/api/employees/get-departments').then(res=>{
                    this.departments = res.data
                }).catch(error=>{
                    console.log(console.error);
                })
            },
            storeEmployee(){
                axios.post('/api/employees', {
                    'first_name': this.form.first_name,
                    'middle_name': this.form.middle_name,
                    'last_name': this.form.last_name,
                    'address': this.form.address,
                    'department_id': this.form.department_id,
                    'country_id': this.form.country_id,
                    'state_id': this.form.state_id,
                    'city_id': this.form.city_id,
                    'zip_code': this.form.zip_code,
                    'birth_date': this.formatDate(this.form.birth_date),
                    'hired_date': this.formatDate(this.form.hired_date),
                }).then(res=>{
                    this.$router.push({name:'employee-index'});
                })
            },
            formatDate(dateValue){
                return moment(String(dateValue)).format('YYYY-MM-DD');
            },
            // updateEmployee(){
            //     this.
            // }
        }
    }
</script>

<style scoped>

</style>