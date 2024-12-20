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
                <!-- End: side panel --><!-- Start: UsersColumn -->
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
                                            >{{ $currentUser->username }}  <svg
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
                        <div class="col pt-3">
                            <div
                                class="card"
                                style="
                                    border-style: solid;
                                    border-color: #e6eff1;
                                    border-radius: 6px;
                                    height: 588.062px;
                                "
                            >
                                <div class="card-body px-5 py-5">
                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="ps-0 ms-3">
                                                    <h3 class="mb-0 ms-0">
                                                        Users
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col d-flex justify-content-xl-end"
                                        >
                                            <label
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
                                    <hr />
                                    <div
                                        class="table-responsive"
                                        style="height: 397.484px"
                                    >
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th
                                                        style="
                                                            width: 184.906px;
                                                            max-width: 242.906px;
                                                        "
                                                    >
                                                        Name
                                                    </th>
                                                    <th
                                                        style="
                                                            width: 149.906px;
                                                            max-width: 129.906px;
                                                        "
                                                    >
                                                        Birthday
                                                    </th>
                                                    <th>
                                                        Account Creation Date
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($users as $user)
                                            <tr>
                                                <td style="max-width: 140.891px; width: 140.891px;">{{ $user->username }}</td>
                                                <td style="max-width: 140.891px; width: 140.891px;">{{ $user->birthday }}</td>
                                                <td style="max-width: 140.891px; width: 140.891px;">{{ $user->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="3">No users found.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>

                                    </table>
                                    </div>
                                   
                                   
                                <nav
                                        class="d-xl-flex d-xxl-flex justify-content-xl-end justify-content-xxl-end mt-3"
                                    >
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    aria-label="Previous"
                                                    href="#"
                                                    ><span aria-hidden="true"
                                                        >«</span
                                                    ></a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >1</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >2</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >3</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >4</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >5</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    aria-label="Next"
                                                    href="#"
                                                    ><span aria-hidden="true"
                                                        >»</span
                                                    ></a
                                                >
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: UsersColumn -->
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/script.min.js?h=481321c584e0b56c514c76979ded9b19"></script>
    </body>
</html>