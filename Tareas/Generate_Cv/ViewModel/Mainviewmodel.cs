using CommunityToolkit.Mvvm.ComponentModel;
using CommunityToolkit.Mvvm.Input;
using System.Collections.ObjectModel;

namespace Generate_Cv.ViewModel
{
    public partial class Mainviewmodel : ObservableObject
    {
        public Mainviewmodel() 
        {
            Items = new ObservableCollection<string>();
        
        }

        [ObservableProperty]
        ObservableCollection<string> items;
                
        [ObservableProperty]
        string text;

        [RelayCommand]
        void Add()
        {
            if (string.IsNullOrWhiteSpace(text))
            {
                return;
            }

            Items.Add(text);
            Text = string.Empty;
        }

        [RelayCommand]
        void Delete(string s)
        { 
            if (Items.Contains(s))
            {
                Items.Remove(s);
            }
        }
    }
}
