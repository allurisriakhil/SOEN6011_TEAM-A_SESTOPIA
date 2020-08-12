<template>
    <form class="modal-body" @submit.prevent="login" @keydown="form.onKeydown($event)">
        <alert-success :form="form" message="You have successfully subscribed to our newsletter!"></alert-success>
        <div class="form-row align-items-center">
            <div class="col-8">
                <div class="form-group">
                    <input v-model="form.email" type="email" id="email" name="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Please enter your email address">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <button :disabled="form.busy" type="submit" class="btn btn-primary mb-2">Subscribe</button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
	export default {
		mounted() {
			$("#subscribe").on("hidden.bs.modal", (e) => {
				this.submitted = null;
				this.form.clear();
				this.form.reset();
			});
		},
		data() {
			return {
				submitted: null,
				form: new Form({
					email: null,
				}),
			};
		},
		methods: {
			login() {
				this.form
					.post("/api/subscribe")
					.then(({ data }) => {
						this.submitted = data;
					})
					.catch((error) => {
						console.log(error);
					});
			},
		},
	};
</script>
