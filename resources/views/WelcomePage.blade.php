<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        />
        <title>FinalProj</title>
        <link
            rel="stylesheet"
            href="/assets/bootstrap/css/bootstrap.min.css?h=2a67f89353a72f7ee4500027c27d0b66"
        />
        <link
            rel="stylesheet"
            href="/assets/css/styles.min.css?h=2a03d977607c486ca4d6a4193c5032e9"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        />
    </head>
    <body style="height: 4594.36px">
        <!-- Start: Navbar Centered Links -->
        <nav
            class="navbar navbar-expand-md bg-body py-3"
            style="border-bottom: 2px solid var(--bs-primary)"
        >
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#"
                    ><span>LitScope</span></a
                ><button
                    data-bs-toggle="collapse"
                    class="navbar-toggler"
                    data-bs-target="#navcol-3"
                >
                    <span class="visually-hidden">Toggle navigation</span
                    ><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                href="#features"
                                data-bs-target="#features"
                                >Features</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials "
                                >Testimonials&nbsp;</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faqs">Faqs</a>
                        </li>
                    </ul>
                    <a
                        class="btn btn-outline-primary btn-lg d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center me-2"
                        role="button"
                        href="{{ route('login') }}"
                        style="
                            font-size: 16px;
                            height: 38px;
                            width: 89px;
                            text-align: center;
                            border-radius: 10px;
                        "
                        >Log in</a
                    ><a
                        class="btn btn-outline-primary btn-lg d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
                        role="button"
                        href="{{ route('login') }}"
                        style="
                            font-size: 16px;
                            height: 38px;
                            width: 89px;
                            border-radius: 10px;
                        "
                        >Sign up</a
                    >
                </div>
            </div>
        </nav>
        <!-- End: Navbar Centered Links --><!-- Start: Hero Clean -->
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6">
                    <div class="p-xl-5 m-xl-5">
                        <img
                            class="rounded img-fluid w-100 fit-cover mb-0"
                            style="min-height: 300px; transform: scale(1.8)"
                            src="/assets/img/undraw_reading-time_gcvc.png?h=0ace528e4ee18181ee3499f3288dff10"
                            width="444"
                            height="329"
                        />
                    </div>
                </div>
                <div
                    class="col-md-6 d-md-flex align-items-md-center justify-content-xl-center"
                >
                    <div style="max-width: 350px; width: 463px">
                        <h1 class="text-uppercase fw-bold">
                            Discover Your Next Favorite Story
                        </h1>
                        <p class="my-3">
                            "Write reviews, find recommendations, and connect
                            with thousands of readers worldwide."
                        </p>
                        <div style="width: 424px">
                            <a
                                class="btn btn-primary btn-lg me-2"
                                role="button"
                                href="{{ route('login') }}"
                                style="border-radius: 10px"
                                >Sign Up for Free</a
                            ><a
                                class="btn btn-outline-primary btn-lg"
                                role="button"
                                href="{{ route('login') }}"
                                style="border-radius: 10px"
                                >Explore Reviews</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Hero Clean --><!-- Start: Stats -->
        <div
            class="container py-4 py-xl-5"
            style="transform: translateY(-28px)"
        >
            <div class="row gy-4 row-cols-2 row-cols-md-4 mt-0">
                <div class="col">
                    <div
                        class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                    >
                        <div
                            class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-book"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path
                                    d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"
                                ></path>
                                <path
                                    d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"
                                ></path>
                                <path d="M3 6l0 13"></path>
                                <path d="M12 6l0 13"></path>
                                <path d="M21 6l0 13"></path>
                            </svg>
                        </div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0"> {{ $totalBooks }}</h2>
                            <p class="mb-0">Books</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                    >
                        <div
                            class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-eye-star"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path
                                    d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"
                                ></path>
                                <path
                                    d="M9.608 17.682c-2.558 -.71 -4.76 -2.603 -6.608 -5.682c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"
                                ></path>
                                <path
                                    d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z"
                                ></path>
                            </svg>
                        </div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0"> {{ $totalComments }}</h2>
                            <p class="mb-0">Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                    >
                        <div
                            class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-users"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path
                                    d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"
                                ></path>
                                <path
                                    d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                                ></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0"> {{ $userCount }} </h2>
                            <p class="mb-0">Users</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                    >
                        <div
                            class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-pencil"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path
                                    d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"
                                ></path>
                                <path d="M13.5 6.5l4 4"></path>
                            </svg>
                        </div>
                        <div class="px-3">
                            <h2 class="fw-bold mb-0"> {{ $totalAuthors }}
                            </h2>
                            <p class="mb-0">Authors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Stats --><!-- Start: Hero Clean Reverse -->
        <div class="container py-4 py-xl-5" style="transform: translateY(-7px)">
            <div class="row mb-5" id="features">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1>
                        <strong
                            >Discover What Makes Us the Ultimate Platform for
                            Book Lovers
                        </strong>
                    </h1>
                    <p class="w-lg-50">
                        Explore features designed to enhance your reading
                        journey and connect you with a passionate community of
                        book enthusiasts.
                    </p>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                <div
                    class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center"
                >
                    <div
                        style="max-width: 350px; transform: translateY(-54px)"
                        class="mb-5"
                    >
                        <h2
                            class="display-6 text-uppercase fw-bold mb-4"
                            style="width: 477px"
                        >
                            <span style="font-weight: normal !important"
                                >Effortless Book Browsing on Your Laptop</span
                            >
                        </h2>
                        <p class="my-3">
                            Dive into a seamless reading experience with
                            full-screen features designed for ultimate
                            convenience
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-xl-5 m-xl-5">
                        <img
                            src="/assets/img/Untitled%20design%20(1).png?h=1042cc12e05fd071ca43b87250a77e10"
                            style="
                                width: 521px;
                                transform: translateX(126px) scale(1.8);
                            "
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Hero Clean Reverse -->
        <div
            class="container ps-5"
            style="transform: translateX(36px) translateY(-212px)"
        >
            <div
                class="card mb-4"
                data-aos="fade-right"
                style="
                    width: 524px;
                    border-radius: 15px;
                    box-shadow: 1px 2px 8px rgb(174, 174, 174);
                    border-style: none;
                    border-color: #0d9859;
                "
            >
                <div
                    class="card-body d-flex ms-0"
                    style="
                        border-style: none;
                        border-radius: 27px;
                        width: 543px;
                    "
                >
                    <p class="card-text" style="font-size: 18px">
                        Easily browse and review books with a user-friendly
                        interface.
                    </p>
                </div>
            </div>
            <div
                class="card mb-4 ms-4"
                data-aos="fade-right"
                style="
                    width: 524px;
                    border-radius: 15px;
                    box-shadow: 1px 2px 8px rgb(174, 174, 174);
                    border-style: none;
                    border-color: #0d9859;
                "
            >
                <div
                    class="card-body d-flex"
                    style="
                        border-style: none;
                        border-radius: 27px;
                        width: 543px;
                    "
                >
                    <p class="card-text" style="font-size: 18px">
                        Manage your reading list with advanced sorting and
                        filtering options.
                    </p>
                </div>
            </div>
            <div
                class="card mb-4 ms-5"
                data-aos="fade-right"
                style="
                    width: 524px;
                    border-radius: 15px;
                    box-shadow: 1px 2px 8px rgb(174, 174, 174);
                    border-style: none;
                    border-color: #0d9859;
                "
            >
                <div
                    class="card-body d-flex"
                    style="
                        border-style: none;
                        border-radius: 27px;
                        width: 543px;
                    "
                >
                    <p class="card-text" style="font-size: 18px">
                        Manage your reading list with advanced sorting and
                        filtering options.
                    </p>
                </div>
            </div>
        </div>
        <!-- Start: Hero Clean Reverse -->
        <div
            class="container py-4 py-xl-5"
            style="transform: translateY(-257px)"
        >
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6">
                    <div class="p-xl-5 m-xl-5">
                        <img
                            src="/assets/img/Untitled%20design.png?h=35a29449a125919f7a41f639b8a94ab6"
                            style="
                                width: 521px;
                                transform: translateX(-189px) translateY(104px)
                                    scale(1.46);
                            "
                        />
                    </div>
                </div>
                <div
                    class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center justify-content-xxl-start"
                >
                    <div style="max-width: 350px; transform: translateY(-54px)">
                        <h2
                            class="display-6 text-uppercase fw-bold"
                            style="width: 443px"
                        >
                            <span style="font-weight: normal !important"
                                >Stay Connected with Books on the Go</span
                            >
                        </h2>
                        <p class="my-3">
                            Enjoy the freedom to browse, review, and explore
                            your favorite books anytime, anywhere.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Hero Clean Reverse -->
        <div
            class="container"
            style="transform: translateX(-9px) translateY(-504px)"
        >
            <div
                class="card mb-4"
                style="
                    width: 524px;
                    border-radius: 15px;
                    box-shadow: 1px 2px 8px rgb(174, 174, 174);
                    border-style: none;
                    transform: translateX(622px);
                "
            >
                <div
                    class="card-body"
                    style="
                        border-style: none;
                        border-radius: 27px;
                        width: 543px;
                    "
                >
                    <p class="card-text" style="font-size: 18px">
                        Optimized for small screens with swipe-friendly
                        navigation.
                    </p>
                </div>
            </div>
            <div
                class="card mb-4"
                style="
                    width: 524px;
                    border-radius: 15px;
                    box-shadow: 1px 2px 8px rgb(174, 174, 174);
                    border-style: none;
                    transform: translateX(532px);
                "
            >
                <div
                    class="card-body"
                    style="
                        border-style: none;
                        border-radius: 27px;
                        width: 543px;
                    "
                >
                    <p class="card-text" style="font-size: 18px">
                        Instant notifications for new reviews, comments, or
                        recommendations.
                    </p>
                </div>
            </div>
            <div
                class="card"
                style="
                    width: 524px;
                    border-radius: 15px;
                    box-shadow: 1px 2px 8px rgb(174, 174, 174);
                    border-style: none;
                    transform: translateX(374px);
                "
            >
                <div
                    class="card-body"
                    style="
                        border-style: none;
                        border-radius: 27px;
                        width: 543px;
                    "
                >
                    <p class="card-text" style="font-size: 18px">
                        Sync your reading progress between devices effortlessly.
                    </p>
                </div>
            </div>
        </div>
        <!-- Start: Features Cards -->
        <div
            class="container py-4 py-xl-5"
            style="transform: translateY(-482px)"
        >
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card" style="border-radius: 15px">
                        <div class="card-body p-4">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-devices-star"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    ></path>
                                    <path
                                        d="M13 13v-4a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v2.5"
                                    ></path>
                                    <path
                                        d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h5.5"
                                    ></path>
                                    <path
                                        d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z"
                                    ></path>
                                    <path d="M16 9h2"></path>
                                </svg>
                            </div>
                            <h4 class="card-title">
                                Top Picks and Trending Books
                            </h4>
                            <p class="card-text">
                                Stay updated with curated lists of trending
                                books, top reviews, and must-read titles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 15px">
                        <div class="card-body p-4">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-message-star"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    ></path>
                                    <path d="M8 9h8"></path>
                                    <path d="M8 13h4.5"></path>
                                    <path
                                        d="M10.325 19.605l-2.325 1.395v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5"
                                    ></path>
                                    <path
                                        d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z"
                                    ></path>
                                </svg>
                            </div>
                            <h4 class="card-title">Write and Share Reviews</h4>
                            <p class="card-text">
                                Share your thoughts on books you've read, rate
                                them, and help others decide what to read next.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 15px">
                        <div class="card-body p-4">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="1em"
                                    height="1em"
                                    viewBox="0 0 24 24"
                                    stroke-width="2"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-devices"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    ></path>
                                    <path
                                        d="M13 9a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1v-10z"
                                    ></path>
                                    <path
                                        d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9"
                                    ></path>
                                    <path d="M16 9h2"></path>
                                </svg>
                            </div>
                            <h4 class="card-title">
                                Mobile and Desktop Optimization
                            </h4>
                            <p class="card-text">
                                Enjoy a seamless experience whether you’re on
                                your laptop or browsing on your phone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Features Cards --><!-- Start: Testimonials -->
        <div
            class="container py-4 py-xl-5"
            style="transform: translateY(-459px)"
        >
            <div class="row mb-5" id="testimonials">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1><strong>Hear from Our Community</strong></h1>
                    <p>"Why Readers Love Us"</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
                <div class="col">
                    <div>
                        <p class="bg-body-tertiary border rounded border-0 p-4">
                            "This platform has completely transformed my reading
                            experience! I’ve discovered so many hidden gems I
                            wouldn’t have found otherwise, and sharing my
                            reviews has connected me with fellow book lovers
                            from around the world. It’s my go-to place for all
                            things books!"
                        </p>
                        <div class="d-flex">
                            <img
                                class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                width="50"
                                height="50"
                                src="/assets/img/clipboard-image.png?h=43b8a6f883618259a5250ba5ddfd4f8f"
                            />
                            <div>
                                <p class="fw-bold text-primary mb-0">
                                    Samantha L.
                                </p>
                                <p class="text-muted mb-0">Busy Professional</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p
                            class="bg-body-tertiary border rounded border-0 p-4 mb-4"
                        >
                            "As an aspiring author, this community has been a
                            goldmine for feedback and inspiration. Seeing honest
                            reviews and connecting with readers has helped me
                            improve my craft. Plus, I’ve found so many
                            incredible books to learn from!"
                        </p>
                        <div class="d-flex">
                            <img
                                class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                width="50"
                                height="50"
                                src="/assets/img/clipboard-image-1.png?h=67a47b433459939fe8e1a85f5d8700cd"
                            />
                            <div>
                                <p class="fw-bold text-primary mb-0">Mark T.</p>
                                <p class="text-muted mb-0">
                                    Writer and Contributor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p class="bg-body-tertiary border rounded border-0 p-4">
                            "I love how easy it is to use this platform on my
                            phone! Whether I’m commuting or relaxing at home, I
                            can browse recommendations, add to my reading list,
                            and even share quick reviews. It’s perfect for busy
                            readers like me!"
                        </p>
                        <div class="d-flex">
                            <img
                                class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                width="50"
                                height="50"
                                src="/assets/img/clipboard-image-1.png?h=67a47b433459939fe8e1a85f5d8700cd"
                            />
                            <div>
                                <p class="fw-bold text-primary mb-0">
                                    Emily R.
                                </p>
                                <p class="text-muted mb-0">Avid Reader</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Testimonials --><!-- Start: FAQS -->
        <div
            class="container py-4 py-xl-5"
            style="transform: translateY(-410px)"
        >
            <div class="row mb-5" id="faqs">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1><strong>&nbsp;Your Questions Answered</strong></h1>
                </div>
            </div>
            <div class="row">
                <div
                    class="col d-xl-flex justify-content-xl-start justify-content-xxl-start align-items-xxl-center"
                >
                    <picture
                        ><img
                            class="d-xxl-flex"
                            src="/assets/img/undraw_my-answer_dwu4.svg?h=94d02e279fa6cbb5e7d640b1f1ee1bed"
                            width="579"
                            height="609"
                    /></picture>
                    <div>
                        <div
                            class="accordion"
                            role="tablist"
                            id="accordion-1"
                            style="width: 692px"
                        >
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-1 .item-1"
                                        aria-expanded="false"
                                        aria-controls="accordion-1 .item-1"
                                    >
                                        Is the platform free to use?
                                    </button>
                                </h2>
                                <div
                                    class="accordion-collapse collapse item-1"
                                    role="tabpanel"
                                    data-bs-parent="#accordion-1"
                                >
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Yes! Signing up and accessing core
                                            features like browsing books,
                                            reading reviews, and creating your
                                            own reviews is completely free.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-1 .item-2"
                                        aria-expanded="false"
                                        aria-controls="accordion-1 .item-2"
                                    >
                                        Can I use the platform on my phone?
                                    </button>
                                </h2>
                                <div
                                    class="accordion-collapse collapse item-2"
                                    role="tabpanel"
                                    data-bs-parent="#accordion-1"
                                >
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Absolutely! Our platform is fully
                                            optimized for mobile devices, so you
                                            can browse, review, and explore on
                                            the go.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-1 .item-3"
                                        aria-expanded="false"
                                        aria-controls="accordion-1 .item-3"
                                    >
                                        How do I write a book review?
                                    </button>
                                </h2>
                                <div
                                    class="accordion-collapse collapse item-3"
                                    role="tabpanel"
                                    data-bs-parent="#accordion-1"
                                >
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Simply log in to your account, go to
                                            the book's page, and click the
                                            "Write a Review" button. You can
                                            rate the book, share your thoughts,
                                            and even add pros and cons to help
                                            other readers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-1 .item-4"
                                        aria-expanded="false"
                                        aria-controls="accordion-1 .item-4"
                                    >
                                        Can I track the books I’ve read?
                                    </button>
                                </h2>
                                <div
                                    class="accordion-collapse collapse item-4"
                                    role="tabpanel"
                                    data-bs-parent="#accordion-1"
                                >
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Yes! You can create a personalized
                                            reading list to track books you’ve
                                            read, want to read, or are currently
                                            reading.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" role="tab">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-1 .item-5"
                                        aria-expanded="false"
                                        aria-controls="accordion-1 .item-5"
                                    >
                                        Is there a way to get book
                                        recommendations?
                                    </button>
                                </h2>
                                <div
                                    class="accordion-collapse collapse item-5"
                                    role="tabpanel"
                                    data-bs-parent="#accordion-1"
                                >
                                    <div class="accordion-body">
                                        <p class="mb-0">
                                            Definitely! Our platform offers
                                            personalized book recommendations
                                            based on your preferences and
                                            reading history.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3>Need More Help?</h3>
                            <p>Can’t find the answer you’re looking for?</p>
                            <p class="mb-0">
                                Contact us at<a
                                    href="#"
                                    class="ms-2"
                                    style="color: var(--bs-primary)"
                                    >support@LitScope.com</a
                                >
                            </p>
                            <p class="mb-0">
                                Visit our<a
                                    href="#"
                                    class="ms-2"
                                    style="color: var(--bs-primary)"
                                    >Help Center</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: FAQS --><!-- Start: Banner Light -->
        <section class="py-4 py-xl-5" style="transform: translateY(-414px)">
            <div class="container">
                <div
                    class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5"
                    style="
                        background: url('/assets/img/freepik__expand__75217.jpg?h=efbcdefc9ad79b6770b0e37959e821cb')
                            right repeat;
                    "
                >
                    <div class="pb-2 pb-lg-1">
                        <h2 class="fw-bold mb-2">
                            Ready to Join Thousands of Book Lovers?
                        </h2>
                        <p class="mb-0">
                            Imperdiet consectetur dolor, tristique himenaeos
                            ultrices tristique neque.
                        </p>
                    </div>
                    <div class="my-2">
                        <a
                            class="btn btn-primary fs-5 py-2 px-4"
                            role="button"
                            href="{{ route('login') }}"
                            >Create an Account</a
                        >
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Banner Light --><!-- Start: Footer Basic -->
        <footer
            class="text-center"
            style="
                transform: translateY(-347px);
                border-top: 2px solid var(--bs-primary);
            "
        >
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <!-- Start: Services -->
                    <div
                        class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item"
                    >
                        <h3 class="fs-6"><strong>Categories</strong></h3>
                        <ul class="list-unstyled">
                            <li>
                                <a class="link-secondary" href="#">Action</a>
                            </li>
                            <li>
                                <a class="link-secondary" href="#">Drama</a>
                            </li>
                            <li>
                                <a class="link-secondary" href="#">Comedy</a>
                            </li>
                            <li>
                                <a class="link-secondary" href="#">Horror</a>
                            </li>
                            <li><a class="link-secondary" href="#">Kids</a></li>
                        </ul>
                    </div>
                    <!-- End: Services --><!-- Start: About -->
                    <div
                        class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item"
                    >
                        <h3 class="fs-6"><strong>Our Service</strong></h3>
                        <ul class="list-unstyled">
                            <li>
                                <a class="link-secondary" href="#"
                                    >Help Center</a
                                >
                            </li>
                            <li>
                                <a class="link-secondary" href="#"
                                    >Product Recalls</a
                                >
                            </li>
                            <li>
                                <a class="link-secondary" href="#"
                                    >Accessibility</a
                                >
                            </li>
                            <li>
                                <a class="link-secondary" href="#"
                                    >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                    <!-- End: About --><!-- Start: Careers -->
                    <div
                        class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item"
                    >
                        <h3 class="fs-6"><strong>Explore</strong></h3>
                        <ul class="list-unstyled">
                            <li>
                                <a class="link-secondary" href="#">About us</a>
                            </li>
                            <li>
                                <a class="link-secondary" href="#">Sitemap</a>
                            </li>
                            <li>
                                <a class="link-secondary" href="#">Bookmarks</a>
                            </li>
                            <li>
                                <a class="link-secondary" href="{{ route('login') }}"
                                    >Sign in/Join</a
                                >
                            </li>
                        </ul>
                    </div>
                    <!-- End: Careers --><!-- Start: Social Icons -->
                    <div
                        class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social"
                    >
                        <div class="fw-bold d-flex align-items-center mb-2">
                            <strong style="font-size: 25px; color: #334b35"
                                >LitScope</strong
                            >
                        </div>
                        <p class="text-muted copyright">
                        The Bookish Corner for Every Avid Reader.
                        </p>
                    </div>
                    <!-- End: Social Icons -->
                </div>
                <hr />
                <div
                    class="d-flex justify-content-between align-items-center pt-3"
                >
                    <p class="text-muted mb-0">Copyright © 2024 LitScope</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                viewBox="0 0 16 16"
                                class="bi bi-facebook"
                            >
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                                ></path>
                            </svg>
                        </li>
                        <li class="list-inline-item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                viewBox="0 0 16 16"
                                class="bi bi-twitter"
                            >
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"
                                ></path>
                            </svg>
                        </li>
                        <li class="list-inline-item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                fill="currentColor"
                                viewBox="0 0 16 16"
                                class="bi bi-instagram"
                            >
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                ></path>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- End: Footer Basic -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="/assets/js/script.min.js?h=e9117c1e852ef3dedc99be2cf3d73750"></script>
    </body>
</html>
