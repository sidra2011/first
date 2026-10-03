@extends("layouts.main")

@section("titlename", "Contact")

@section("contentbox")

    <div class="page-heading">
        <h1>Contact Me</h1>
        <p>Have a question or want to work together? Send me a message.</p>
    </div>

    <div class="contact-card">
        @if( session("success")  )
            {{  session("success")  }}
        @endif

        

        <form action="/admin/saverecord" method="post">

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="Enter your phone number"
                >
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea
                    name="message"
                    id="message"
                    placeholder="Write your message..."
                    required
                ></textarea>
            </div>

            <button type="submit" class="send-btn">
                Send Message
            </button>

        </form>

    </div>

@endsection
