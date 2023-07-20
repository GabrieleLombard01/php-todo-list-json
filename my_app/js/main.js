const {createApp} = Vue;

const app = createApp({
    data(){
        return {
            tasks: [],
            newTask: ''
        }
    },
    methods:{
        addTask(){
            console.log(this.newTask);
        }
    },
    created(){
        axios.get('http://localhost/php-todo-list-json/api/tasks/')
        .then(res => {
            this.tasks = res.data;
        });
    }
})

app.mount('#app')