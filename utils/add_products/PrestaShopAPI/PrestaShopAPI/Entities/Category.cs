namespace PrestaShopAPI.Entities
{
    public class Category
    {
        public long Id { get; set; }
        public string Name { get; set; }
        public long ParentId { get; set; }
    }
}
