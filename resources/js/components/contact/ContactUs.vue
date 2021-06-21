<template>
    <div class="contact-form">

        <div class="site-container">
            <h1 class="heading-104 text-center"><br class="d-sm-block d-md-none">お問い合わせ</h1>
            <ul class="list">
                <li>お問い合わせ前に <router-link to="/faq">FAQ</router-link> をご確認下さい。</li>
                <li>お問い合わせの内容によりましては、ご案内するまでにお時間を頂戴する場合や、ご返信できかねる場合がございます。予めご了承ください。</li>
                <li><router-link to="/privacy-policy">プライバシーポリシー</router-link>にご同意の上、お問い合わせください。</li>
                <li>返信内容の二次利用は固くお断りいたします。</li>
            </ul>
            <form @submit.prevent="submit">
                <div class="form-group mt-5">
                    <label for="">お名前&nbsp;<span class="required">必須</span></label>
                    <input v-model="form.name" type="text" class="form-control takumoi-input" placeholder="入力してください">
                </div>

            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Form',
        data() {
        return{
            form:{
                name:'',
                email:'',
                contact_content: '',
                contact_options: [
                    'ログインについて', 
                    '決済について',
                    'コンテンツについて',
                    'メールアドレスを変更したい',
                    'その他'
                ],
                text:''
            },
        }
    },
}
</script>