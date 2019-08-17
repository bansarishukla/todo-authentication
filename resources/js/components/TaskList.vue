<template>
 <div class='row'>
   <div class="card">
     <div class="card-header">
       <div class="card-title">
           <h1>My Tasks</h1>
       </div>
           <h4>New Task</h4>
     </div>
     <div class="card-body">
         <form action="#" @submit.prevent="createTask()">
           <div class="input-group">
               <input v-model="task.body" type="text" name="body" class="form-control mr-2" autofocus>
               <span class="input-group-btn">
                   <button type="submit" class="btn btn-primary">Add</button>
               </span>
           </div>
       </form>
     </div>
     <div class="card-footer">
               <h4>All Tasks</h4>
       <ul class="list-group">
           <li v-if='list.length === 0'>There are no tasks yet!</li>
           <li class="list-group-item" v-for="(task, index) in list" :key="index">
                 {{ task.body }}
                 <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs bb">Delete</button>
           </li>
       </ul>
     </div>
   </div>
 </div>
</template>
<script>
   export default {
       props:[
           'user',
           'tasks'
       ],
       data() {
           return {
               list: [],
               task: {
                   id: '',
                   body: ''
               }
           };
       },
       created() {
        //    this.fetchTaskList();
       },
       mounted() {
           if(this.tasks) {
               this.list = this.tasks
           }
       },
       methods: {
        //    fetchTaskList() {
        //        axios.get('api/tasks').then((res) => {
        //            this.list = res.data;
        //        });
        //    },
           createTask() {
               let data = {
                   task: this.task,
                   user_id: this.user_id
               }
               let task = {
                   body: this.task
               }
               this.list.push(task)
               axios.post('api/tasks', this.data)
                   .then((res) => {
                       this.task.body = '';
                       this.edit = false;
                       this.fetchTaskList();
                   })
                   .catch((err) => console.error(err));
           },
           deleteTask(id) {
               axios.delete('api/tasks/' + id)
                   .then((res) => {
                       this.fetchTaskList()
                   })
                   .catch((err) => console.error(err));
           },
       }
}
</script>
<style >
    .card {
        width: 100%;
    }
 .delete {
   margin-left:auto;
 }
 .bb {
     margin: 0px 10% 0px 90%;
 }
</style>

