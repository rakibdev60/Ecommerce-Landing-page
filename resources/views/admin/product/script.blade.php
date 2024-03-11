<script>
    function add_attribute() {
        const element = document.getElementById("add_attrute");
        const uuid = Math.floor(Math.random() * 9999);
        const div = document.createElement("div");
        div.setAttribute('class', 'flex gap-5 mb-5');
        div.setAttribute('id', `attribute_${uuid}`);

        const html = `<div class="w-1/2">
                        <label for="">Attribute Name</label>
                        <input name="attributes[name][${uuid}]" type="text">
                        <button type="button" class="text-red-600">Remove</button>
                    </div>
                    <div class="w-full">
                        <label for="">Attribute Value</label>
                        <div id="attribute_values_${uuid}"></div>
                        <button type="button" onclick="add_value('${uuid}')"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add Value
                        </button>
                    </div>`;

        div.innerHTML = html;
        element.appendChild(div);
    }

    function remove_attribute() {

    }

    function add_value(uuid) {
        const element = document.getElementById('attribute_values_' + uuid);
        const div = document.createElement("div");
        div.setAttribute('class', 'flex gap-5 mb-5');

        const html = `
        <input name="attributes[value][${uuid}][]" type="text">
        <input name="attributes[image][${uuid}][]" type="file">
        <button type="button" class="text-red-600">Remove</button>`;

        div.innerHTML = html;
        element.appendChild(div);
    }


    function remove_value(uuid) {

    }
</script>
