<template>

    <div class="container">
        <div class="alert alert-info">
            <h1>
                Message Yooo: {{ message }}
            </h1>
        </div>

        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

        <ul class="list-group">
            <li class="list-group-item" v-for="user in userModels">{{ user.name }}</li>  
        </ul>

        <a href="/" class="btn btn-primary">Go home</a>

        <a href="/" class="btn btn-primary">Go home</a>
    </div>


</template>

<script>

export default {
    data() {
        return {
            message: 'Hello there!'
        }
    },

    computed: {
        userModels() {
            return this.users.data;
        }
    },

    props: {
        users: {
            required: true
            // type: Array
        }
    },

    mounted() {
        console.log('I live!');
        console.dir(this.users);
    }
}

</script>

