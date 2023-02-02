$.getJSON('data/menu.json', function (data) {
    // console.log(menu)
    const menu = data.menu;
    $.each(menu, function(i, data) {
        $('#list-menu').append('<div data-aos="fade-in" data-aos-duration="1000"><div class="flex items-center space-x-2"><img src="../assets/star.svg" alt=""><p>'+ data.rating +'</p></div><img src="./data/image/'+ data.image +'" alt="" class="w-[15rem] h-[8rem]"><div class="pt-5"><h4 class="text-[1.15rem] font-medium">'+ data.title +'</h4><div class="flex items-center pt-2"><p class="text-[.9rem] text-[#dddddd]">'+ data.topping +'</p><p class="ml-auto font-medium">$ '+ data.price +'</p></div></div></div>')
    })
})