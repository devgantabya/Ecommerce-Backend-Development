<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <!-- Footer Section -->
  <footer class="bg-gray-300 text-black py-8 mt-8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h4 class="text-lg font-semibold">Contact Us</h4>
          <p>Email: developergantabya@gmail.com</p>
          <p>Phone: +880 12345 67890</p>
        </div>
        <div>
          <h4 class="text-lg font-semibold">Social Media</h4>
          <div class="flex space-x-4">
            <a href="https://www.linkedin.com/in/devgantabya/" class="hover:text-blue-500">Linkedin</a>
            <a href="https://www.facebook.com/devgantabya" class="hover:text-blue-500">Facebook</a>
            <a href="https://www.behance.net/dev_gantabya" class="hover:text-blue-500">Behance</a>
          </div>
        </div>
        <div>
          <h4 class="text-lg font-semibold">Legal</h4>
          <a href="#" class="block hover:text-blue-500">Terms & Conditions</a>
          <a href="#" class="block hover:text-blue-500">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style></style>
