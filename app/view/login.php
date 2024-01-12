<?php
require_once('../controller/usercontroller.php');

$user = new usercontroller();
$m = $user->login();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Wiki™</title>
</head>

<body>
	<section>

		<!-- component -->
		<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
			<div class="relative py-3 sm:max-w-xl sm:mx-auto">
				<div class="absolute inset-0 bg-gradient-to-l from-gray-100 via-gray-200 to-gray-300 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
				</div>
				<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
					<div class="max-w-md mx-auto">
						<div>
							<h1 class="text-2xl font-semibold">Login Form</h1>
						</div>
						<form action="" method="post">
						<?php if (!empty($m)) : ?>
                                <div class="text-xl font-semibold text-red-500">
                                    <?php echo $m; ?>
                                </div>
                            <?php endif; ?>
							<div class="divide-y divide-gray-200">
								<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
									<div class="relative">
										<input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
										<label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
									</div>
									<div class="relative">
										<input autocomplete="off" id="password" name="pass" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
										<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
									</div>
									<div class="relative">
										<button name="submit" type="submit" class="bg-gray-400 text-white rounded-md px-2 py-1">Submit</button>
									</div>
									<p class="text-sm font-light text-gray-500 dark:text-gray-400">
										Don't have an account yet?<a href="register.php" class="font-medium text-gray-600  hover:underline">Sign up an account </a>
									</p>
								</div>
							</div>
						</form>
						
<!-- 
						<form class="max-w-sm mx-auto">
						<?php if (!empty($m)) : ?>
							<div class="text-xl font-semibold text-red-500">
                                    <?php echo $m; ?>
                                </div>
								</div>
                            <?php endif; ?>
							<div class="divide-y divide-gray-200">
						<div class="mb-5">
							<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
							<input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
						</div>
						<div class="mb-5">
							<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
							<input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
						</div>
						<div class="flex items-start mb-5">
							<div class="flex items-center h-5">
							<input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
							</div>
							<label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
						</div>
						<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
						</form> -->

					</div>
				</div>
			</div>
		</div>

	</section>

</body>

</html>