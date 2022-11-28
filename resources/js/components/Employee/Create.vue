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
                        Add Employee
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="" class="form-control" value="">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" name="middle_name" id="" class="form-control" value="">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="" class="form-control" value="">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" id="" class="form-control" cols="8" rows="2"></textarea>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department_id">Department</label>
                                        <select name="department_id" id="" class="form-control">
                                            <option value="">Select Department</option>
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
                                        <select name="state_id" id="" class="form-control">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city_id">City</label>
                                        <select name="city_id" id="" class="form-control">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" name="zip_code" id="" class="form-control" value="">
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="birth_date">Birth Date</label>
                                        <datepicker name="birth_date" input-class="form-control"></datepicker>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="hired_date">Hired Date</label>
                                        <datepicker name="hired_date" input-class="form-control"></datepicker>
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

    export default{
        components: {
            Datepicker
        },
        data(){
            return{
                countries: [],
                states: [],
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
        },
        methods: {
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
            }
        }
    }
</script>

<style scoped>

</style>