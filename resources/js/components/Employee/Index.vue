<template>
    <div>
        <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cities</h1>
    </div>

    
        <div>
            <span class="alert alert-primary"></span>
        </div>
    

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form action="" method="GET">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <input type="search" name="search" class="form-control mb-2" placeholder="Search state">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <router-link :to="{name: 'employee-create'}" class="float-right btn btn-sm btn-primary">Create</router-link>
                            <!-- <a href="" class="float-right btn btn-sm btn-primary">Create</a> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Department</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <a href="" class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <!-- <form action="{{route('cities.destroy', $city->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form> -->
                                        </div>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    
};
</script>

<style scoped>

</style>