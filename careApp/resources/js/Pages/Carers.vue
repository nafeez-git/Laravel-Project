<template>

    <div class="container">
        <div class="alert alert-info">
            <h1>
                Message: {{ message }}
            </h1>
        </div>

        <ul class="list-group">
            <li class="list-group-item" v-for="user in users">{{ user.name }}</li>  
        </ul>

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

    props: {
        users: {
            required: true,
            type: Array
        }
    },

    mounted() {
        console.log('I live!');
    }
}

</script>

