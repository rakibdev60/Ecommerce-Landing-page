<script>
    var attribute_index = 1;

    function add_attribute(uuid = null, value = "") {
        const element = document.getElementById("attributes");

        // uuid ganaret
        uuid = uuid ? uuid : attribute_index;
        attribute_index = (Number(uuid) + 1);

        // create a div
        const div = document.createElement("div");
        div.setAttribute('class', 'flex gap-5 mb-5');
        div.setAttribute('id', `attribute_id_${uuid}`);

        const html = `<div class="w-1/2">
                        <label for="attributes[name][${uuid}]">Attribute Name</label>
                        <input name="attributes[name][${uuid}]" value="${value}" type="text">
                        <button type="button" onclick="remove_attribute('attribute_id_${uuid}')" class="text-red-600">Remove</button>
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

    function remove_attribute(id) {
        const element = document.getElementById(id);
        element.remove();
    }

    function add_value(uuid, value = "", uuid2 = null) {
        const element = document.getElementById('attribute_values_' + uuid);
        const div = document.createElement("div");
        uuid2 = uuid2 ?? Math.floor(Math.random() * 9999) + 1;
        div.setAttribute('id', `attribute_value_${uuid2}`);
        div.setAttribute('class', 'flex gap-5 mb-5');

        const html = `
        <input name="attributes[value][${uuid}][${uuid2}]" value="${value}" type="text">
        <input name="attributes[image][${uuid}][${uuid2}]" type="file" value="">
        <button type="button" onclick="remove_value('attribute_value_${uuid2}')" class="text-red-600">Remove</button>`;

        div.innerHTML = html;
        element.appendChild(div);
    }


    function remove_value(id) {
        const element = document.getElementById(id);
        element.remove();
    }
</script>
