<template>
    <div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
            </tr>
            </thead>
            <tbody>
            <tr v-for="employee in employees">
                {{employee}}
            </tr>
            <!--<tr v-for="employee, index in employees">
                <td>{{ employee.name }}</td>
                <td>{{ employee.address }}</td>
                <td>{{ employee.website }}</td>
                <td>{{ employee.email }}</td>
                <td>&lt;!&ndash;
                    <router-link :to="{name: 'editEmployee', params: {id: employee.id}}" class="btn btn-xs btn-default">
                        Edit
                    </router-link>&ndash;&gt;
                    <a href="#"
                       class="btn btn-xs btn-danger"
                       v-on:click="deleteEntry(employee.id, index)">
                        Delete
                    </a>
                </td>
            </tr>-->
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "Grid",
        data: function () {
            return {
                employees: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/v1/employees')
                .then(function (resp) {
                    app.employees = resp.data;
                    console.log(app.employees)
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load employees");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/v1/employees/' + id)
                        .then(function (resp) {
                            app.employees.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete employee");
                        });
                }
            }
        }
    }
</script>
