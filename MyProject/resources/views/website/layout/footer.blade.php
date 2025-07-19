



  

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button
  class="xc wf xf ie ld vg sr gh tr g sa ta _a"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
  :class="{ 'uc' : scrollTop }"
>
  <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
  </svg>
</button>

    <!-- ====== Back To Top End ===== -->

    <script>
      //  Pricing Table
      const setup = () => {
        return {
          isNavOpen: false,

          billPlan: 'monthly',

          plans: [
            {
              name: 'Starter',
              price: {
                monthly: 29,
                annually: 29 * 12 - 199,
              },
              features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
            {
              name: 'Growth Plan',
              price: {
                monthly: 59,
                annually: 59 * 12 - 100,
              },
              features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
            {
              name: 'Business',
              price: {
                monthly: 139,
                annually: 139 * 12 - 100,
              },
              features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
            },
          ],
        };
      };
    </script>
  <script defer src="bundle.js"></script></body>
</html>
