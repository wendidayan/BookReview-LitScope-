<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="background: #f5f6fa">
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
            href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        />
        <link
            rel="stylesheet"
            href="/assets/css/styles.min.css?h=8e713fa5824ea27e6457842bce5a19c9"
        />
    </head>
    <body>
        <section>
            <div class="row" style="height: fit-content">
                <!-- Start: side panel -->
                <div
                    class="col-7 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-2 pe-0"
                    style="position: fixed; overflow: visible; height: inherit"
                >
                    <!-- Start: card side panel -->
                    <div
                        class="card"
                        style="
                            border-style: solid;
                            border-color: #e6eff1;
                            height: 1214.594px;
                        "
                    >
                        <div class="card-body me-0" style="border-style: none">
                            <div class="row d-inline">
                                <div class="col mb-5">
                                    <h3
                                        class="d-xl-flex justify-content-xl-center align-items-xl-center"
                                    >
                                        <span style="color: rgb(0, 0, 0)"
                                            >LITSCOPE</span
                                        >
                                    </h3>
                                </div>
                                <div class="col-lg-12"><p>Main Menu</p></div>
                                <!-- Start: homeBtn -->
                                <div
                                    class="col d-flex align-items-xl-center my-0 py-2"
                                >
                                    <a
                                        class="text-decoration-none"
                                        href="{{ url('/AdminDashboard') }}"
                                        style="color: rgb(0, 0, 0)"
                                        ><div class="d-flex">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                class="d-xl-flex pe-0 me-3"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M21 8.77217L14.0208 1.79299C12.8492 0.621414 10.9497 0.621413 9.77817 1.79299L3 8.57116V23.0858H10V17.0858C10 15.9812 10.8954 15.0858 12 15.0858C13.1046 15.0858 14 15.9812 14 17.0858V23.0858H21V8.77217ZM11.1924 3.2072L5 9.39959V21.0858H8V17.0858C8 14.8767 9.79086 13.0858 12 13.0858C14.2091 13.0858 16 14.8767 16 17.0858V21.0858H19V9.6006L12.6066 3.2072C12.2161 2.81668 11.5829 2.81668 11.1924 3.2072Z"
                                                    fill="currentColor"
                                                ></path>
                                            </svg>
                                            <h5 class="d-xl-flex">Home</h5>
                                        </div></a
                                    >
                                </div>
                                <!-- End: homeBtn --><!-- Start: BookBtn -->
                                <div
                                    class="col d-flex align-items-xl-center my-0 py-2"
                                >
                                    <a
                                        class="text-decoration-none"
                                        href="{{ url('/AdminBooks') }}"
                                        style="color: rgb(0, 0, 0)"
                                        ><div class="d-flex">
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
                                                class="icon icon-tabler icon-tabler-book d-xl-flex pe-0 me-3"
                                                style="font-size: 20px"
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
                                            <h5 class="d-xl-flex">Books</h5>
                                        </div></a
                                    >
                                </div>
                                <!-- End: BookBtn --><!-- Start: UsersBtn -->
                                <div
                                    class="col d-flex align-items-xl-center my-0 py-2"
                                >
                                    <a
                                        class="text-decoration-none"
                                        href="{{ url('/AdminUsers') }}"
                                        style="color: rgb(0, 0, 0)"
                                        ><div class="d-flex">
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
                                                class="icon icon-tabler icon-tabler-users d-xl-flex pe-0 me-3"
                                                style="font-size: 20px"
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
                                                <path
                                                    d="M16 3.13a4 4 0 0 1 0 7.75"
                                                ></path>
                                                <path
                                                    d="M21 21v-2a4 4 0 0 0 -3 -3.85"
                                                ></path>
                                            </svg>
                                            <h5 class="d-xl-flex">Users</h5>
                                        </div></a
                                    >
                                </div>
                                <!-- End: UsersBtn -->
                                <div class="col-lg-12"><p>Controls</p></div>
                                <!-- Start: AddBookBtn -->
                                <div
                                    class="col d-flex align-items-xl-center my-0 py-2"
                                >
                                    <a
                                        class="text-decoration-none"
                                        href="{{ url('/AdminAddBook') }}"
                                        style="color: rgb(0, 0, 0)"
                                        ><div class="d-flex">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                class="d-xl-flex pe-0 me-3"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    d="M12 6C12.5523 6 13 6.44772 13 7V11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H13V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V13H7C6.44772 13 6 12.5523 6 12C6 11.4477 6.44772 11 7 11H11V7C11 6.44772 11.4477 6 12 6Z"
                                                    fill="currentColor"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M5 22C3.34315 22 2 20.6569 2 19V5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V19C22 20.6569 20.6569 22 19 22H5ZM4 19C4 19.5523 4.44772 20 5 20H19C19.5523 20 20 19.5523 20 19V5C20 4.44772 19.5523 4 19 4H5C4.44772 4 4 4.44772 4 5V19Z"
                                                    fill="currentColor"
                                                ></path>
                                            </svg>
                                            <h5 class="d-xl-flex">Add Book</h5>
                                        </div></a
                                    >
                                </div>
                                <!-- End: AddBookBtn --><!-- Start: RemoveBookBtn -->
                                <div
                                    class="col d-flex align-items-xl-center my-0 py-2"
                                >
                                    <a
                                        class="text-decoration-none"
                                        href="{{ url('/AdminRemoveBook') }}"
                                        style="color: rgb(0, 0, 0)"
                                        ><div class="d-flex">
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
                                                class="icon icon-tabler icon-tabler-circle-minus d-xl-flex pe-0 me-3"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    stroke="none"
                                                    d="M0 0h24v24H0z"
                                                    fill="none"
                                                ></path>
                                                <path
                                                    d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"
                                                ></path>
                                                <path d="M9 12l6 0"></path>
                                            </svg>
                                            <h5 class="d-xl-flex">
                                                Remove Book
                                            </h5>
                                        </div></a
                                    >
                                </div>
                                <!-- End: RemoveBookBtn --><!-- Start: ApproveBookBtn -->
                                <div
                                    class="col d-flex align-items-xl-center my-0 py-2"
                                >
                                    <a
                                        class="text-decoration-none"
                                        href="{{ url('/AdminAproveBook') }}"
                                        style="color: rgb(0, 0, 0)"
                                        ><div class="d-flex">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                class="d-xl-flex pe-0 me-3"
                                                style="font-size: 20px"
                                            >
                                                <path
                                                    d="M10.2426 16.3137L6 12.071L7.41421 10.6568L10.2426 13.4853L15.8995 7.8284L17.3137 9.24262L10.2426 16.3137Z"
                                                    fill="currentColor"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M1 5C1 2.79086 2.79086 1 5 1H19C21.2091 1 23 2.79086 23 5V19C23 21.2091 21.2091 23 19 23H5C2.79086 23 1 21.2091 1 19V5ZM5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3Z"
                                                    fill="currentColor"
                                                ></path>
                                            </svg>
                                            <h5 class="d-xl-flex">
                                                Approve Book
                                            </h5>
                                        </div></a
                                    >
                                </div>
                                <!-- End: ApproveBookBtn -->
                            </div>
                        </div>
                    </div>
                    <!-- End: card side panel -->
                </div>
                <!-- End: side panel --><!-- Start: Dashboard -->
                <div
                    class="col-lg-9 col-xl-10 col-xxl-10 offset-lg-3 offset-xl-2 offset-xxl-2"
                    style="
                        background: #f5f6fa;
                        overflow: visible;
                        max-height: 731px;
                        position: absolute;
                    "
                >
                    <div class="row">
                        <div
                            class="col ps-0 pe-0"
                            style="
                                border-style: none;
                                border-bottom: 1px solid #e6eff1;
                            "
                        >
                            <!-- Start: Navbar Centered Links -->
                            <nav class="navbar navbar-expand-md bg-body py-3">
                                <div class="container">
                                    <button
                                        data-bs-toggle="collapse"
                                        class="navbar-toggler"
                                        data-bs-target="#navcol-2"
                                    >
                                        <span class="visually-hidden"
                                            >Toggle navigation</span
                                        ><span
                                            class="navbar-toggler-icon"
                                        ></span>
                                    </button>
                                    <div>
                                        <h5 class="pb-0 mb-0 me-4">
                                            Dashboard
                                        </h5>
                                    </div>
                                    <input
                                        class="form-control-sm"
                                        type="search"
                                        style="
                                            border-radius: 32px;
                                            height: 45px;
                                            background: rgba(
                                                133,
                                                133,
                                                133,
                                                0.17
                                            );
                                            border-style: none;
                                            border-color: #334b35;
                                            margin-top: 10px;
                                            margin-bottom: 10px;
                                            margin-left: 5px;
                                            margin-right: 5px;
                                            width: inherit;
                                        "
                                        placeholder="Search"
                                        name="Search"
                                    />
                                    <div
                                        class="collapse navbar-collapse"
                                        id="navcol-2"
                                    >
                                        <button
                                            class="btn btn-primary me-3 ms-4"
                                            type="button"
                                            style="
                                                background: transparent;
                                                border-style: none;
                                            "
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
                                                class="icon icon-tabler icon-tabler-arrows-diagonal"
                                                style="
                                                    color: #4da454;
                                                    font-size: 26px;
                                                "
                                            >
                                                <path
                                                    stroke="none"
                                                    d="M0 0h24v24H0z"
                                                    fill="none"
                                                ></path>
                                                <path d="M16 4l4 0l0 4"></path>
                                                <path d="M14 10l6 -6"></path>
                                                <path
                                                    d="M8 20l-4 0l0 -4"
                                                ></path>
                                                <path d="M4 20l6 -6"></path>
                                            </svg></button
                                        ><button
                                            class="btn btn-primary me-3"
                                            type="button"
                                            style="
                                                background: transparent;
                                                border-style: none;
                                                color: #4da454;
                                            "
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                style="
                                                    color: #4da454;
                                                    font-size: 26px;
                                                "
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"
                                                    fill="currentColor"
                                                ></path>
                                            </svg></button
                                        ><button
                                            class="btn btn-primary me-3"
                                            type="button"
                                            style="
                                                background: transparent;
                                                border-style: none;
                                                color: #4da454;
                                            "
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
                                                class="icon icon-tabler icon-tabler-bell"
                                                style="
                                                    color: #4da454;
                                                    font-size: 25px;
                                                "
                                            >
                                                <path
                                                    stroke="none"
                                                    d="M0 0h24v24H0z"
                                                    fill="none"
                                                ></path>
                                                <path
                                                    d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                                                ></path>
                                                <path
                                                    d="M9 17v1a3 3 0 0 0 6 0v-1"
                                                ></path>
                                            </svg></button
                                        ><a
                                            class="d-md-flex d-lg-flex d-xxl-flex justify-content-md-center justify-content-lg-center align-items-xxl-center ms-3"
                                            href="#"
                                            style="
                                                text-decoration: none;
                                                border-style: none;
                                                border-color: rgba(
                                                    0,
                                                    0,
                                                    0,
                                                    0.65
                                                );
                                                color: rgba(0, 0, 0, 0.65);
                                                margin-left: 24px;
                                            "
                                            >Account<svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="1em"
                                                height="1em"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"
                                                class="bi bi-person"
                                                style="
                                                    margin-left: 9px;
                                                    font-size: 29px;
                                                "
                                            >
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"
                                                ></path></svg
                                        ></a>
                                    </div>
                                </div>
                            </nav>
                            <!-- End: Navbar Centered Links -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 pt-3">
                            <div
                                class="card"
                                style="
                                    border-style: solid;
                                    border-color: #e6eff1;
                                    border-radius: 6px;
                                    height: auto;
                                "
                            >
                                <div class="card-body px-5 py-5">
                                    <div class="row">
                                        <div class="col-xl-1 col-xxl-2">
                                            <div class="d-flex">
                                                <div class="ps-0 ms-3">
                                                    <h3 class="mb-0 ms-0">
                                                        Books and Reviews
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-xl-10 col-xxl-10 offset-xl-1 offset-xxl-0 d-flex justify-content-xl-end align-items-xl-center align-items-xxl-center"
                                        >
                                            <label
                                                class="form-label d-xl-flex align-items-xl-center me-2"
                                                style="
                                                    margin-bottom: 1px;
                                                    padding-bottom: 0px;
                                                "
                                                >Authors</label
                                            ><select
                                                class="d-xxl-flex me-4"
                                                style="
                                                    border-style: none;
                                                    height: 30px;
                                                "
                                            >
                                                <option value="1">
                                                    Arthur Gonzalez
                                                </option>
                                                <option value="2">
                                                    Dana Chambers
                                                </option>
                                                <option value="3">
                                                    Ernesto Wade
                                                </option>
                                                <option value="4">
                                                    Karla Newman
                                                </option>
                                                <option value="5">
                                                    Misty Figueroa
                                                </option>
                                                <option value="6">
                                                    Rita James
                                                </option>
                                                <option value="7">
                                                    Suzanne Casey
                                                </option></select
                                            ><label
                                                class="form-label d-xl-flex align-items-xl-center me-2"
                                                style="
                                                    margin-bottom: 1px;
                                                    padding-bottom: 0px;
                                                "
                                                >Genres</label
                                            ><select
                                                class="d-xxl-flex me-4"
                                                style="
                                                    border-style: none;
                                                    height: 30px;
                                                "
                                            >
                                                <option value="1">
                                                    Action &amp; Adventure
                                                </option>
                                                <option value="2" selected="">
                                                    Animals
                                                </option>
                                                <option value="3">
                                                    Activity Books
                                                </option>
                                                <option value="4">
                                                    Anthologies
                                                </option>
                                                <option value="5">
                                                    Arts &amp; Literature
                                                </option>
                                                <option value="6">
                                                    Classics
                                                </option>
                                                <option value="7">
                                                    Contemporary
                                                </option>
                                                <option value="8">
                                                    Cultural
                                                </option>
                                                <option value="9">
                                                    European
                                                </option>
                                                <option value="10">
                                                    Fiction
                                                </option>
                                                <option value="11">
                                                    Historical
                                                </option>
                                                <option value="12">
                                                    Uncategorized
                                                </option></select
                                            ><label
                                                class="form-label d-xl-flex align-items-xl-center"
                                                style="
                                                    margin-bottom: 1px;
                                                    padding-bottom: 0px;
                                                "
                                                >Show</label
                                            ><select
                                                class="d-xxl-flex me-4"
                                                style="
                                                    border-style: none;
                                                    height: 30px;
                                                "
                                            >
                                                <option value="undefined">
                                                    5
                                                </option>
                                                <option value="" selected="">
                                                    10
                                                </option>
                                                <option value="">20</option>
                                                <option value="">
                                                    30
                                                </option></select
                                            ><label
                                                class="form-label d-xl-flex align-items-xl-center me-2"
                                                style="
                                                    margin-bottom: 1px;
                                                    padding-bottom: 0px;
                                                "
                                                >Search</label
                                            ><input type="search" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col"><hr /></div>
                                    </div>
                                    <div class="row">
                                        <!-- Start: BookCards -->
                                        <div
                                            class="col-sm-6 col-md-6 col-lg-12 col-xl-12"
                                        >
                                            <div
                                                class="card border-0"
                                                style="border-style: none"
                                            >
                                                <div
                                                    class="card-body d-inline-flex justify-content-evenly"
                                                    style="
                                                        border-style: none;
                                                        border-right-style: none;
                                                    "
                                                >
                                                    <!-- Start: Book_img -->
                                                    <div
                                                        class="d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center"
                                                        style="
                                                            width: 1000.8594px;
                                                        "
                                                    >
                                                        <picture
                                                            ><img
                                                                class="img-fluid"
                                                                src="/assets/img/Asset%201.png?h=5b3d64bc53126679d6091568004b9ab7"
                                                                width="128"
                                                                height="190"
                                                                style="
                                                                    border-radius: 20px;
                                                                    width: inherit;
                                                                "
                                                        /></picture>
                                                    </div>
                                                    <!-- End: Book_img -->
                                                    <div
                                                        style="
                                                            margin-top: 15px;
                                                            width: inherit;
                                                        "
                                                        class="ms-4"
                                                    >
                                                        <a
                                                            href="#"
                                                            style="
                                                                color: rgb(
                                                                    55,
                                                                    58,
                                                                    60
                                                                );
                                                                text-decoration: none;
                                                            "
                                                            ><h4>
                                                                Harry Potter and
                                                                the sorcerer's
                                                                Stone&nbsp;
                                                            </h4></a
                                                        ><!-- Start: starRatings&Reviews -->
                                                        <div
                                                            class="d-flex align-items-xxl-center"
                                                        >
                                                            <i
                                                                class="fas fa-star"
                                                                style="
                                                                    color: var(
                                                                        --bs-yellow
                                                                    );
                                                                "
                                                            ></i
                                                            ><i
                                                                class="fas fa-star"
                                                                style="
                                                                    color: var(
                                                                        --bs-yellow
                                                                    );
                                                                "
                                                            ></i
                                                            ><i
                                                                class="fas fa-star"
                                                                style="
                                                                    color: var(
                                                                        --bs-yellow
                                                                    );
                                                                "
                                                            ></i
                                                            ><i
                                                                class="far fa-star"
                                                                style="
                                                                    color: rgb(
                                                                        174,
                                                                        174,
                                                                        174
                                                                    );
                                                                "
                                                            ></i
                                                            ><i
                                                                class="far fa-star"
                                                                style="
                                                                    color: rgb(
                                                                        174,
                                                                        174,
                                                                        174
                                                                    );
                                                                "
                                                            ></i
                                                            ><!-- Start: reviews -->
                                                            <p
                                                                style="
                                                                    margin-bottom: -1px;
                                                                    margin-top: 14px;
                                                                    font-size: 18px;
                                                                "
                                                                class="my-2 ms-4 mb-0 mt-0"
                                                            >
                                                                &nbsp;<svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="1em"
                                                                    height="1em"
                                                                    viewBox="0 0 24 24"
                                                                    stroke-width="2"
                                                                    stroke="currentColor"
                                                                    fill="none"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="icon icon-tabler icon-tabler-eye-star me-2"
                                                                    style="
                                                                        font-size: 20px;
                                                                    "
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
                                                                    ></path></svg
                                                                >Reviews
                                                                :&nbsp;<span
                                                                    >123</span
                                                                >
                                                            </p>
                                                            <!-- End: reviews -->
                                                        </div>
                                                        <!-- End: starRatings&Reviews -->
                                                        <p
                                                            style="
                                                                margin-bottom: -1px;
                                                                margin-top: 14px;
                                                            "
                                                            class="my-2"
                                                        >
                                                            J.K. Rowling
                                                        </p>
                                                        <p
                                                            style="
                                                                max-height: 130px;
                                                                overflow: auto;
                                                            "
                                                        >
                                                            Lorem ipsum odor
                                                            amet, consectetuer
                                                            adipiscing elit.
                                                            Massa arcu nunc
                                                            justo egestas mus
                                                            fames. Ut litora
                                                            litora eget sed eget
                                                            viverra cubilia
                                                            finibus mollis.
                                                            Penatibus nisl
                                                            hendrerit parturient
                                                            ultrices justo
                                                            lectus vivamus
                                                            dapibus. Semper nibh
                                                            litora aenean
                                                            sodales maecenas
                                                            mattis consequat
                                                            enim commodo. Eros
                                                            habitasse donec orci
                                                            fames luctus lacinia
                                                            ultrices blandit.
                                                            Sit accumsan
                                                            himenaeos urna
                                                            conubia morbi a,
                                                            proin nulla. Tortor
                                                            ad metus; curae
                                                            fusce commodo dui
                                                            imperdiet. Lacinia
                                                            fusce magnis posuere
                                                            hendrerit ultricies
                                                            suspendisse.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center align-items-xxl-end ms-4"
                                                    >
                                                        <div
                                                            class="table-responsive"
                                                        >
                                                            <table
                                                                class="table table-borderless"
                                                            >
                                                                <tbody>
                                                                    <tr>
                                                                        <td
                                                                            style="
                                                                                width: 131.578px;
                                                                            "
                                                                        >
                                                                            Genres
                                                                        </td>
                                                                        <td
                                                                            style="
                                                                                height: inherit;
                                                                                width: inherit;
                                                                            "
                                                                        >
                                                                            <a
                                                                                href="#"
                                                                                style="
                                                                                    text-decoration: underline
                                                                                        none;
                                                                                    margin-right: 12px;
                                                                                    color: rgb(
                                                                                        0,
                                                                                        0,
                                                                                        0
                                                                                    );
                                                                                "
                                                                                >Magic</a
                                                                            ><a
                                                                                href="#"
                                                                                style="
                                                                                    text-decoration: underline
                                                                                        none;
                                                                                    margin-right: 12px;
                                                                                    color: rgb(
                                                                                        0,
                                                                                        0,
                                                                                        0
                                                                                    );
                                                                                "
                                                                                >Adventure</a
                                                                            ><a
                                                                                href="#"
                                                                                style="
                                                                                    text-decoration: underline
                                                                                        none;
                                                                                    margin-right: 12px;
                                                                                    color: rgb(
                                                                                        0,
                                                                                        0,
                                                                                        0
                                                                                    );
                                                                                "
                                                                                >Young
                                                                                Adult</a
                                                                            ><a
                                                                                href="#"
                                                                                style="
                                                                                    text-decoration: underline
                                                                                        none;
                                                                                    margin-right: 12px;
                                                                                    color: rgb(
                                                                                        0,
                                                                                        0,
                                                                                        0
                                                                                    );
                                                                                "
                                                                                >Fantasy</a
                                                                            ><a
                                                                                href="#"
                                                                                style="
                                                                                    text-decoration: underline
                                                                                        none;
                                                                                    margin-right: 12px;
                                                                                    color: rgb(
                                                                                        0,
                                                                                        0,
                                                                                        0
                                                                                    );
                                                                                "
                                                                                >Children</a
                                                                            >
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Published
                                                                        </td>
                                                                        <td>
                                                                            June
                                                                            26,
                                                                            1997
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Format
                                                                        </td>
                                                                        <td>
                                                                            333
                                                                            pages
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Language
                                                                        </td>
                                                                        <td>
                                                                            English
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End: BookCards -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Dashboard -->
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/script.min.js?h=481321c584e0b56c514c76979ded9b19"></script>
    </body>
</html>