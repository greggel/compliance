<template>
    <div class='row'>
        <h1>My Environment</h1>
        <h4>Add to Environment</h4>
        <form action="#" @submit.prevent="createEnvironment()">
            <div class="input-group">
                <input v-model="environment.body" type="text" name="body" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Add</button>
                </span>
            </div>
        </form>
        <h4>All environments</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no environments yet!</li>
            <li class="list-group-item" v-for="(environment, index) in list">
                 

                 {{ environment.firstname }}
                 

                 <button @click="deleteEnvironment(environment.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                list: [],
                environment: {
                    id: '',
                    body: ''
                }
            };
        },
        
        created() {
            this.fetchEnvironmentList();
        },
        
        methods: {
            fetchEnvironmentList() {
                axios.get('api/environment').then((res) => {
                    this.list = res.data;
                });
            },
 
            createEnvironment() {
                axios.post('api/environment', this.environment)
                    .then((res) => {
                        this.environment.body = '';
                        this.edit = false;
                        this.fetchEnvironmentList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteEnvironment(id) {
                axios.delete('api/environment/' + id)
                    .then((res) => {
                        this.fetchEnvironmentList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
</script>
