<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Detail</title>
</head>

<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .text-responsive {
        line-height: 67.2px;
        font-size: 56px;
        /* Default font size for larger screens */
        font-weight: 700;
    }

    /* Responsive font size for smaller screens */
    @media (max-width: 768px) {
        .text-responsive {
            font-size: 28px;
            line-height: 33.6px;
        }
    }

    .full-width-image {
        width: 100%;
        border-radius: 10px;
        height: auto;
        /* Untuk menjaga rasio gambar */
        display: block;
        /* Hilangkan jarak bawah gambar */
    }

    .img-rectangle {
        width: 738px;
        height: 490px;
        border-radius: 10px;
        display: block;
    }

    .interior-section .text-content {
        text-align: left;
        font-size: 18px;
        font-weight: 400;
        line-height: 21.6px;
        /* Pusatkan teks */
        margin-top: 20px;
        /* Berikan jarak atas pada teks */
    }

    @media (max-width: 768px) {
        .interior-section .text-content {
            font-size: 16px;
            line-height: 19.2px;
        }
    }
</style>

<body>
    @include('components.navbar')

    <div class="container mt-5 mb-3 text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-responsive">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Interior Image and Text Section -->
        <div class="interior-section row">
            <!-- Full-width image -->
            <div class="col-12">
                <img src="{{ asset('images/design interior.png') }}" alt="Interior Design"
                    class="img-fluid full-width-image">
            </div>

            <!-- Text Content -->
            <div class="col-12 text-content">
                <p>
                    Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever.
                </p>
                <p>
                    Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is
                    merely the symptom of a worse problem to take into consideration.
                </p>
                <p>
                    The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the
                    paint you may slap on your face to impress the new boss is your business. But what about your daily
                    bread?
                </p>
            </div>

            <!-- Centered Rectangle Image -->
            <div class="col-12 d-flex justify-content-center">
                <img src="{{ asset('images/Rectangle 124.png') }}" alt="Rectangle" class="img-fluid img-rectangle">
            </div>
            <div class="col-12 text-content">
                <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the
                    paint you may slap on your face to impress the new boss is your business. But what about your daily
                    bread? Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use
                    is merely the symptom of a worse problem to take into consideration.</p>
                <p>Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever. </p>
                <p>Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever. </p>
                <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods, the
                    paint you may slap on your face to impress the new boss is your business. But what about your daily
                    bread? Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use
                    is merely the symptom of a worse problem to take into consideration.</p>
                <p>Not so fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is
                    merely the symptom of a worse problem to take into consideration.</p>
                <p>Design comps, layouts, wireframes—will your clients accept that you go about things the facile way?
                    Authorities in our business will tell in no uncertain terms that Lorem Ipsum is that huge, huge no
                    no to forswear forever. </p>
            </div>
        </div>
    </div>

    <div class="container section-4">
        <div class="row">
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex; margin-top: 80px;">
                <div style="align-self: stretch; color: #333333; font-size: 40px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 48px; word-wrap: break-word">Read Other</div>
                <div style="align-self: stretch; height: 1px; background: #999999"></div>

                <!-- Section 1 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <a href="{{ route('BlogDetail') }}" style="text-decoration: none; color: inherit;">
                            <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                                <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">
                                    August 13, 2021
                                </div>
                                <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">
                                    10 Hilarious Cartoons That Depict Real-Life Problems of Programmers
                                </div>
                            </div>
                        </a>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <!-- Section 2 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <!-- Section 3 -->
                <div style="align-self: stretch; justify-content: center; align-items: center; gap: 60px; display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex; max-width: 610px;">
                        <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 6px; display: flex">
                            <div style="text-align: center; color: #232E52; font-size: 14px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 16.80px; word-wrap: break-word">August 13, 2021 </div>
                            <div style="color: #5C5C5C; font-size: 28px; font-family: Plus Jakarta Sans; font-weight: 700; line-height: 33.60px; word-wrap: break-word">10 Hilarious Cartoons That Depict Real-Life Problems of Programmers</div>
                        </div>
                        <div style="color: #232E52; font-size: 16px; font-family: Plus Jakarta Sans; font-weight: 400; line-height: 19.20px; word-wrap: break-word">
                            Redefined the user acquisition and redesigned the onboarding experience, all within 3 working weeks.
                        </div>
                    </div>
                    <img style="width: 400px; height: 210px; border-radius: 8px; max-width: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1579547657324-aafb76ea4198?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <div style="align-self: stretch; height: 1px; background: #999999"></div>
            </div>
        </div>
    </div>



    @include('components.footer')
</body>

</html>
