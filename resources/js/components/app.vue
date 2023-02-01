<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <br>
                    <div class="card-header">Formulir Investasi</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Jenis kelamin</label>
                                <div>
                                    <label class="radio-inline"><input v-model="data.jenis_kelamin" value="1" type="radio" name="jenis_kelamin" :checked="data.jenis_kelamin== 1 ? true : false">laki-Laki</label>
                                    <label class="radio-inline"><input v-model="data.jenis_kelamin" value="2" type="radio" name="jenis_kelamin" :checked="data.jenis_kelamin== 2 ? true : false">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="pwd">Usia</label>
                              <input placeholder="0" v-model="data.usia" type="number" class="form-control" id="usia">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Peroko</label>
                                <div>
                                    <label class="radio-inline">
                                        <input v-model="data.peroko" value="1" type="radio" name="peroko" :checked="data.peroko == 1 ? true:false">Iya
                                    </label>
                                    <label class="radio-inline">
                                        <input v-model="data.peroko" value="2" type="radio" name="peroko" :checked="data.peroko == 2 ? true:false">Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Nominal</label>
                                <input placeholder="0" v-model="data.nominal" type="number" class="form-control" id="nominal">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Lama Investasi</label>
                                <input placeholder="0" v-model="data.tahun_inves" type="number" class="form-control" id="tahun_inves">
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary" @click="submitData()">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
            <pre>{{ result}}</pre>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                data:{
                    jenis_kelamin:1,
                    usia:'',
                    peroko:1,
                    nominal:'',
                    tahun_inves:''
                },
                result:''

            }
        },
        methods: {
            submitData() {
                axios.post('api/create-investasi', this.data).then(response => {
                    let result = {
                        'status':200,
                        'message': response.message,
                        'data': response.data
                    }
                    console.log(result)
                    this.result = result
                }).catch(error => {
                    if('message' in error){
                        console.log(error.message)
                    }
                })
            },
        }
    }
</script>
